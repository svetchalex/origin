<?php

/**
 * @param $str
 *
 * @return bool
 */
function isPalindrome($str)
{
    $len = mb_strlen($str);
    $pal = false;
    $chars = [];
    for ($k = 0; $k < $len; $k++) {
        $chars[] = mb_substr($str, $k, 1);
    }
    if ($chars[0] === $chars[$len - 1]) {
        $pal = true;
    }
    return $pal;
}
