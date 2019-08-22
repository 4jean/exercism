<?php

function wordCount(string $string): array
{
    $words = str_word_count(strtolower($string), 1, '0123456789');
    return array_count_values($words);
}
