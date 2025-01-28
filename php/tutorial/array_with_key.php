<?php
$phone = [
    'you' => '666-666-6666',
    'me' => '111-111-1111',
];

echo 'your phone number: ' . $phone['you'] . "\n";

if (array_key_exists('me', $phone)) {
    echo 'I exist' . "\n";
} else {
    echo 'where am I?';
}

print_r(array_keys($phone));
print_r(array_values($phone));
