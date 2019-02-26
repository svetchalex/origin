<?php
/**
 * @param $temperatures
 * @param $number
 *
 * @return int|string
 */
function findIndex($temperatures, $number)
{
    $res = -1;
    if (!empty($temperatures)) {
        foreach ($temperatures as $key => $temperature) {
            if ($temperature === $number) {
                $res = $key;
                break;
            }
        }
    }
    return $res;
}
