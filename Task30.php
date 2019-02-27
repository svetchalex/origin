<?php
/**
 * @param mixed ...$numbers
 *
 * @return float|int|null
 */
function average(...$numbers)
{
    $result = null;
    if (!empty($numbers)) {
        $cnt = count($numbers);
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        $result = $sum / $cnt;
    }
    return $result;
}
