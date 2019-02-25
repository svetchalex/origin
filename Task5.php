<?php
/**
 * @param $a
 * @param $b
 * @param $c
 *
 * @return bool
 */
function discriminant($a, $b, $c)
{
    $dis = $b * $b - 4 * $a * $c;
    $x1 = (-$b - sqrt($dis)) / 2 * $a;
    $x2 = (-$b + sqrt($dis)) / 2 * $a;
    return true;
}
