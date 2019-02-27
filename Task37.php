<?php
/**
 * @param $users
 *
 * @return array
 */
function getMensCountByYear($users)
{
    $birthday = [];
    foreach ($users as $user) {
        if ($user['gender'] === 'male') {
            $birthday[] = $user['birthday'];
        }
    }
    foreach ($birthday as $key => $item) {
        $time = strtotime($item);
        $birthday[$key] = date('Y', $time);
    }
    $birthday = array_count_values($birthday);
return $birthday;
}