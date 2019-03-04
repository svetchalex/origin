<?php
/**
 * @param $str1
 * @param $str2
 *
 * @return string|null
 */
function cd($str1, $str2)
{
    $res = null;
    $arr1 = explode('/', $str1);
    $arr2 = explode('/', $str2);
    if (mb_strpos($str2, '/') === 0) {
        $res = $str2;
    } else {
        foreach ($arr2 as $key1 => $item1) {

            if ($item1 === '..') {
                unset($arr1[count($arr1) - 1], $arr2[$key1]);

            }
            if ($item1 === '.') {
                unset($arr2[$key1]);
            }

        }
        $res = implode('/', $arr1) . '/' . implode('/', $arr2);
    }
    return $res;
}
