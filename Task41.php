<?php
/**
 * @param $arr1
 * @param $arr2
 *
 * @return mixed
 */
function getDifference($arr1, $arr2)
{
    if (!empty($arr1) && !empty($arr2)) {
        foreach ($arr1 as $key => $item1) {
            foreach ($arr2 as $item2) {
                if ($item1 === $item2) {
                    unset($arr1[$key]);
                }
            }
        }
    }
    return $arr1;
}
