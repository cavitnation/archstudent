from pathlib import Path
import subprocess
root = Path(__file__).resolve().parents[1]
forbidden = {'data/subscribers.json', 'data/community.json', '.env'}
paths = subprocess.check_output(['git', '-C', str(root), 'ls-files', '-z']).decode().split('\0')
for path in paths:
    if not path or not (root / path).is_file(): continue
    assert path not in forbidden, 'Operational data must not be tracked: ' + path
    assert not path.endswith(('.db', '.sqlite', '.sqlite3')), 'Database must not be tracked: ' + path
print('Source hygiene passed.')
