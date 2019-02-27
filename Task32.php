<?php
/**
 * @param $str
 *
 * @return string|null
 */
function slugify($str)
{
    $res = null;
    if (!empty($str)) {
        $str = mb_strtolower($str);
        $str = preg_replace('/( )+/', ' ', $str);
        $str = trim($str);
        $arr = explode(' ', $str);
        $res = implode('-', $arr);
    }
    return $res;
}
