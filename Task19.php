<?php
/**
 * @param $str
 *
 * @return bool
 */
function checkIfBalanced($str)
{
    $res = false;
    $cnt = 0;
    $len = mb_strlen($str);
    for ($k = 0; $k < $len; $k++) {
        $chars[] = mb_substr($str, $k, 1);
    }
    foreach ($chars as $item) {
        if ($item === '(') {
            $cnt++;
        }
        if ($item === ')') {
            $cnt--;
        }
    }
    if ($cnt === 0) {
        $res = true;
    }
    return $res;
}
