<?php
/**
 * @param $cities
 * @param $index
 * @param $city
 *
 * @return mixed|null
 */
function get($cities, $index, $city = null)
{
    $str = null;
    if (array_key_exists($index, $cities)) {
        $str = $cities[$index];
    } else {
        $str = $city;
    }
    return $str;
}
