<?php
/**
 * @param $names
 * @param $prefix
 *
 * @return array|string
 */
function addPrefix($names, $prefix)
{
    $newName = [];
    foreach ($names as $key => $name) {
        $newName = $prefix . ' ' . $name;
    }
    return $newName;
}
