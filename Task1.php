<?php

/**
 * @param $str
 *
 * @return bool
 */
function isPalindrome($str)
{
    $len = mb_strlen($str);
    $pal = true;
    $chars = [];
    for ($k = 0; $k < $len; $k++) {
        $chars[] = mb_substr($str, $k, 1);
    }
    $cnt = count($chars);
    $flo = floor($cnt / 2);
    foreach ($chars as $key => $value) {
        if ($key < $flo && $value !== $chars[$cnt - $key - 1]) {
            $pal = false;
        }
    }
    return $pal;
}
