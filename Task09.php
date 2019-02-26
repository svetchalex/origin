<?php
/**
 * @param $temperatures
 *
 * @return float|int
 */
function calculateAverage($temperatures)
{
    $cnt = 0;
    $res = null;
    if (!empty($temperatures)) {
        foreach ($temperatures as $value) {
            $cnt += $value;
        }
        $res = $cnt / count($temperatures);
    }
    return $res;
}