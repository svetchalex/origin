<?php
/**
 * @param $data
 *
 * @return int|string
 */
function getIndexOfWarmestDay($data)
{
    if (!empty($data)) {
        $number = $data[0][0];
        $res = 0;
        foreach ($data as $key => $numbers) {
            $number2 = max($numbers);
            if ($number2 > $number) {
                $number = $number2;
                $res = $key;
            }
        }
    } else {
        $res = null;
    }
    return $res;
}
