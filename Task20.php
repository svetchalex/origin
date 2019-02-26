<?php
/**
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function getIntersectionForSortedArray($arr1, $arr2)
{
    $res_arr = [];
    if (!empty($arr1) && !empty($arr2)) {
        foreach ($arr1 as $item1) {
            foreach ($arr2 as $item2) {
                if ($item1 === $item2) {
                    $res_arr[] = $item1;
                }
            }
        }
        foreach ($res_arr as $key1 => $res1) {
            foreach ($res_arr as $key2 => $res2) {
                if ($res1 === $res2 && $key1 !== $key2) {
                    unset($res_arr[$key1]);
                }
            }
        }
    }
    return $res_arr;
}

/**
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function getIntersectionForSortedArray2($arr1, $arr2)
{
    if (!empty($arr1) && !empty($arr2)) {
        $arr = array_intersect($arr1, $arr2);
        $arr = array_unique($arr);
    }
    return $arr;
}

