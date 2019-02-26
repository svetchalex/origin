<?php
/**
 * @param $number
 *
 * @return bool|int
 */
function reverse($number)
{
    $abs_number = abs($number);
    $rev = strrev($abs_number);
    if ($number < 0) {
        $rev *= -1;
    }
    return $rev;
}
