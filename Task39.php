<?php
/**
 * @param $users
 *
 * @return mixed|null
 */
function getManWithLessFriends($users)
{
    $res = null;
    $hold = 0;
    foreach ($users as $key1 => $user) {
        $cnt = count($users[$key1]['friends']);
        if ($cnt <= $hold) {
            $res = $user;
            $hold = $cnt;
        }
    }
    return $res;
}
