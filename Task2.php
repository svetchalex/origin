<?php
/**
 * @param $str
 *
 * @return bool
 */
function isPalindrome($str)
{
    $rev = strrev($str);
    $pal = true;
    if ($str !== $rev) {
        $pal = false;
    }
    return $pal;
}