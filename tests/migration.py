import json
import os
from pathlib import Path
import shutil
import subprocess
import tempfile

source = Path(__file__).resolve().parents[1]
with tempfile.TemporaryDirectory(prefix='migration-test-') as temp:
    root = Path(temp) / 'public'
    (root / 'scripts').mkdir(parents=True)
    (root / 'data').mkdir()
    shutil.copy(source / '_private.php', root)
    shutil.copy(source / 'scripts/migrate-private-data.php', root / 'scripts')
    private = Path(temp) / 'private'
    fixture = [{'id': 'test', 'token': 'synthetic-old-token', 'status': 'pending'}]
    (root / 'data/community.json').write_text(json.dumps(fixture))
    (root / 'data/subscribers.json').write_text(json.dumps([{'email': 'example@example.invalid'}]))
    env = {**os.environ, 'ARCHSTUDENT_DATA_DIR': str(private)}
    subprocess.run(['php', str(root / 'scripts/migrate-private-data.php'), '--apply'], env=env, check=True)
    assert json.loads((private / 'community.json').read_text()) == [{'id': 'test', 'status': 'pending'}]
    assert not (root / 'data/community.json').exists()
    assert not (root / 'data/subscribers.json').exists()
    before = (private / 'community.json').read_bytes()
    (root / 'data/community.json').write_text(json.dumps(fixture))
    conflict = subprocess.run(['php', str(root / 'scripts/migrate-private-data.php'), '--apply'], env=env, capture_output=True)
    assert conflict.returncode != 0 and (root / 'data/community.json').exists()
    assert (private / 'community.json').read_bytes() == before
    print('Migration preserves records, revokes tokens and refuses conflicting destinations.')
