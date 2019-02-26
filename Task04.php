<?php
/**
 * @param $a
 * @param $b
 *
 * @return bool
 */
function swap($a, $b)
{
    $hold = $a;
    $a = $b;
    $b = $hold;
    return true;
}
