<?php
$required = getenv('BRK2_REQUIRED_VAR');
if ($required === false || $required === '') {
    http_response_code(500);
    echo "FATAL: BRK2_REQUIRED_VAR is not set\n";
    exit(1);
}
echo "brk2 needs-param OK: BRK2_REQUIRED_VAR=" . htmlspecialchars($required) . "\n";
