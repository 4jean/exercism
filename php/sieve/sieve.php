<?php

function sieve(int $numberLimit): array
{
    $primes = [];

    for ($i = 2; $i <= $numberLimit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

function isPrime(int $number): bool
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}