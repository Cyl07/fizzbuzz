<?php

function fizzbuzz(int $number): string
{
    if ($number % 3 === 0 && $number % 5 === 0) {
        return 'fizzbuzz';
    } elseif ($number % 3 === 0) {
        return 'fizz';
    } elseif ($number % 5 === 0) {
        return 'buzz';
    } else {
        return $number;
    }
}
