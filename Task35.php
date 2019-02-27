<?php
/**
 * @param $users
 *
 * @return array
 */
function getChildren($users)
{
    $children = [];
    foreach ($users as $item1) {
        foreach ($item1['children'] as $item2) {
            $children[] = $item2;
        }
    }
    return $children;
}


