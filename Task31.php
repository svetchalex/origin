<?php
/**
 * @param mixed ...$arr
 *
 * @return array
 */
function union(...$arr)
{
    $res = [];
    if (!empty($arr)) {
        foreach ($arr as $item1) {
            foreach ($item1 as $item2) {
                $res[] = $item2;
            }
        }
        $res = array_unique($res);
    }
    return $res;
}
