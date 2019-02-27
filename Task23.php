<?php
/**
 * @param $data
 * @param $arr
 *
 * @return array
 */
function pick($data, $arr)
{
    $res = [];
    foreach ($arr as $item1) {
        foreach ($data as $key => $item2) {
            if (array_key_exists($item1, $data) && $item1 === $key) {
                $res[$item1] = $item2;
            }
        }
    }
    return $res;
}

