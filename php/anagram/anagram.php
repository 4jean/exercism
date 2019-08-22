<?php

function detectAnagrams(string $str, array $arr)
{
    $result = [];
    foreach ($arr as $word) {
        $result[] = isAnagram($str, $word) ? $word : null;
    }
    return array_values(array_filter($result));
}

function isAnagram(string $str1, string $word)
{
    return count_chars(strtolower($str1), 1) === count_chars(strtolower($word), 1) && strcasecmp($str1, $word);
}