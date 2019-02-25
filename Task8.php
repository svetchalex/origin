<?php
/**
 * @param $names
 * @param $index
 *
 * @return mixed
 */
function swap($names, $index)
{
    if ($index !== 0 && array_key_exists($index, $names) && $index !== count($names) - 1) {
        $str = $names[$index - 1];
        $names[$index - 1] = $names[$index + 1];
        $names[$index + 1] = $str;
    }
    return $names;
}
