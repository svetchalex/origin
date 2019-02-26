<?php
/**
 * @param $numbers
 *
 * @return array
 */
function getSameParity($numbers)
{
    $res_numb = [];
    if (!empty($numbers)) {
        $res = $numbers[0] % 2;
        foreach ($numbers as $number) {
            if ($res === ($number % 2)) {
                $res_numb[] = $number;
            }
        }
    }
    return $res_numb;
}
