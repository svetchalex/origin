<?php
/**
 * @param $arr1
 * @param $arr2
 *
 * @return int
 */
function getSameCount($arr1, $arr2)
{
    $res = 0;
    if (!empty($arr1) && !empty($arr2)) {
        $arr = array_unique(array_intersect($arr1, $arr2));
        $res = count($arr);
    }
    return $res;
}
