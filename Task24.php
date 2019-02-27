<?php
/**
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function genDiff($arr1, $arr2)
{
    $res_arr = [];
    foreach ($arr1 as $key1 => $item1) {
        foreach ($arr2 as $key2 => $item2) {
            if (!array_key_exists($key1, $arr2)) {
                $res_arr[$key1] = 'deleted';
            }
            if (!array_key_exists($key2, $arr1)) {
                $res_arr[$key1] = 'added';
            }
            if ($key1 === $key2 && $item1 === $item2) {
                $res_arr[$key1] = 'unchanged';
            }
            if ($key1 === $key2 && $item1 !== $item2) {
                $res_arr[$key2] = 'changed';
            }
        }
        foreach ($arr2 as $key4 => $item4) {
            foreach ($arr1 as $key3 => $item3) {
                if (!array_key_exists($key3, $arr2)) {
                    $res_arr[$key4] = 'deleted';
                }
                if (!array_key_exists($key4, $arr1)) {
                    $res_arr[$key4] = 'added';
                }
                if ($key3 === $key4 && $item3 === $item4) {
                    $res_arr[$key4] = 'unchanged';
                }
                if ($key3 === $key4 && $item3 !== $item4) {
                    $res_arr[$key4] = 'changed';

                }
            }
        }

    }
    return $res_arr;
}
