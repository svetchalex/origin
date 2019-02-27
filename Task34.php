<?php
/**
 * @param     $users
 * @param int $number
 */
function takeOldest($users, $number = 1)
{
    $res = [];
    $cnt = count($users);
    $arr = [];
    for ($i = 0; $i < $number; $i++) {
        foreach ($users as $item) {
            $arr[] = $item['birthday'];
        }

        $min = min($arr);
        $index = array_search($min, $arr);
        $arr = [];
        $res[] = $users [$index];
        unset($users[$index]);
    }

    return $res;
}

