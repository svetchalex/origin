<?php
/**
 * @param $users
 *
 * @return array|bool
 */
function getSortedNames($users)
{
    $res_arr = [];
    foreach ($users as $item1) {
        foreach ($item1 as $key => $item2) {
            if ($key === 'name') {
                $res_arr[] = $item2;
            }
        }
    }
    sort($res_arr);
    return $res_arr;
}
