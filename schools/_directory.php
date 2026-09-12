<?php
/* World directory of architecture schools — merged from regional research,
   deduped, region+flag assigned. UET Lahore links to its internal profile.
   Data lives in _schools.json (built by scratchpad/build_dir.php). */
return json_decode(file_get_contents(__DIR__ . '/_schools.json'), true) ?: [];
