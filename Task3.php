<?php
/**
 * @param $number
 *
 * @return bool|int
 */
function reverse($number)
{
    $abs_number = abs($number);
    $str = settype($abs_number, 'string');
    $rev = strrev($str);
    $res = settype($rev, 'integer');
    if ($number < 0) {
        $res *= -1;
    }
    return $res;
}
