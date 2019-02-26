<?php
/**
 * @param $numbers
 *
 * @return mixed
 */
function bubbleSort($numbers)
{
    if (!empty($numbers)) {
        $cnt = count($numbers);
        for ($i = 0; $i < $cnt; $i++) {
            for ($j = 0; $j < $cnt; $j++) {
                if ($i !== $j && $numbers[$i] < $numbers[$j]) {
                    $hold = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $hold;

                }
            }
        }
    }
    return $numbers;
}
