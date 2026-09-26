"""Exercise real PHP endpoints with synthetic records, never production data."""
import http.client
import json
import os
from pathlib import Path
import re
import shutil
import socket
import sqlite3
import subprocess
import tempfile
import time

SOURCE = Path(__file__).resolve().parents[1]
IS_ARCH = SOURCE.name == 'archstudent'
with tempfile.TemporaryDirectory(prefix='php-security-') as temp:
    root = Path(temp) / 'public'
    shutil.copytree(SOURCE, root, ignore=shutil.ignore_patterns('.git', 'node_modules'))
    private = Path(temp) / 'private'
    private.mkdir()
    env = os.environ.copy()
    password_hash = subprocess.check_output(['php', '-r', "echo password_hash('synthetic-test-password', PASSWORD_DEFAULT);"], text=True)
    env['ARCHSTUDENT_DATA_DIR'] = str(private)
    env['ARCHSTUDENT_ADMIN_PASSWORD_HASH' if IS_ARCH else 'QURAN_ADMIN_PASSWORD_HASH'] = password_hash
    if IS_ARCH:
        (private / 'community.json').write_text(json.dumps([{'id': 'fixture', 'name': 'Example', 'message': 'Synthetic test', 'status': 'pending'}]))
        endpoint = '/community/manage.php'
        def exists():
            return len(json.loads((private / 'community.json').read_text())) == 1
    else:
        (root / 'cache').mkdir(exist_ok=True)
        db = sqlite3.connect(root / 'cache/community.db')
        db.execute('CREATE TABLE posts (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT NOT NULL, msg TEXT NOT NULL, ts INTEGER NOT NULL, ip TEXT NOT NULL)')
        db.execute("INSERT INTO posts VALUES (1, 'Example', 'Synthetic test', 1, '127.0.0.1')")
        db.commit()
        endpoint = '/admin.php'
        def exists():
            return db.execute('SELECT COUNT(*) FROM posts').fetchone()[0] == 1
    with socket.socket() as sock:
        sock.bind(('127.0.0.1', 0)); port = sock.getsockname()[1]
    server = subprocess.Popen(['php', '-d', 'display_errors=0', '-S', f'127.0.0.1:{port}', '-t', str(root)], env=env, stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)
    cookie = ''
    def request(path, data=None):
        global cookie
        connection = http.client.HTTPConnection('127.0.0.1', port, timeout=5)
        headers = {'Cookie': cookie}
        if data is not None:
            headers['Content-Type'] = 'application/x-www-form-urlencoded'
        connection.request('GET' if data is None else 'POST', path, body=data, headers=headers)
        response = connection.getresponse()
        set_cookie = response.getheader('Set-Cookie')
        if set_cookie:
            assert 'HttpOnly' in set_cookie and 'secure' in set_cookie.lower()
            cookie = set_cookie.split(';', 1)[0]
        body = response.read().decode()
        status = response.status
        connection.close()
        return status, body
    try:
        for _ in range(100):
            try:
                status, body = request(endpoint)
                break
            except ConnectionRefusedError:
                time.sleep(0.05)
        else:
            raise AssertionError('PHP server failed to start')
        assert status == 200
        token = re.search(r'name="csrf" value="([a-f0-9]+)"', body).group(1)
        identifier = 'fixture' if IS_ARCH else '1'
        assert request(endpoint, f'action=delete&id={identifier}')[0] == 403
        assert request(endpoint, f'action=delete&id={identifier}&csrf={token}')[0] == 403
        assert exists()
        assert request(endpoint, f'action=login&password=synthetic-test-password&csrf={token}')[0] == 303
        body = request(endpoint)[1]
        authenticated_token = re.search(r'name="csrf" value="([a-f0-9]+)"', body).group(1)
        assert authenticated_token != token
        assert request(endpoint, f'action=delete&id={identifier}&csrf={token}')[0] == 403
        request(endpoint + f'?do=delete&action=delete&id={identifier}')
        if IS_ARCH:
            assert request('/community/moderate.php?id=fixture&t=old-token&do=delete')[0] == 303
        else:
            assert request('/community.php?del=1&key=old-token')[0] == 303
        assert exists(), 'GET or stale CSRF token mutated data'
        assert request(endpoint, f'action=delete&id={identifier}&csrf={authenticated_token}')[0] == 303
        assert not exists(), 'Authorized POST failed'
        print('HTTP authentication, cookie flags, CSRF, legacy GET and authorized POST passed.')
    finally:
        server.terminate(); server.wait(timeout=5)
        if not IS_ARCH: db.close()
