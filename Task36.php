<?php
/**
 * @param $users
 *
 * @return array
 */
function getGirlFriends($users)
{
    $friends = [];
    foreach ($users as $item1) {
        foreach ($item1['friends'] as $item2) {
            if ($item2['gender'] === 'female') {
                $friends[] = $item2;
            }
        }
    }
    return $friends;
}