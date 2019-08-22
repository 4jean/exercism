<?php

function raindrops($number)
{
    return showNumberString($number);
}

function showPlingForFactorOf3($number)
{
    return ($number % 3 === 0) ? 'Pling' : '';
}

function showPlangForFactorOf5($number)
{
    return ($number % 5 === 0) ? 'Plang' : '';
}

function showPlongForFactorOf7($number)
{
    return ($number % 7 === 0) ? 'Plong' : '';
}

function changeNumberToString($number)
{
    return (string)$number;
}

function showNumberString($number)
{
    return $result =
        showPlingForFactorOf3($number) . showPlangForFactorOf5($number) . showPlongForFactorOf7($number) ?:
            changeNumberToString($number);
}