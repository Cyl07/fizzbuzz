<?php

require __DIR__ . '/fizzbuzz.php';

function check(int $value, string $expected): void {
    $result = fizzbuzz($value);

    if ($result === $expected) {
        echo "SUCCESS: get $expected for $value!!!\n";
    } else {
        echo "ERROR: expected $expected for $value, but get $result!!!\n";
    }
}

check(3, 'fizz');
check(5, 'buzz');
check(15, 'fizzbuzz');
check(7, '7');
