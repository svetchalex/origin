<?php
/**
 * @param $numbers
 *
 * @return bool
 */
function isContinuousSequence($numbers)
{
    $res = true;
    $cnt = count($numbers);
    if (!empty($numbers)) {
        $seq = $numbers[1] - $numbers[0];

        for ($i = 0; $i < $cnt; $i++) {
            if ($i < $cnt - 1) {
                $seq2 = $numbers[$i + 1] - $numbers[$i];
                if ($seq2 !== $seq) {
                    $res = false;
                }
            }
        }
    } else {
        $res = false;
    }
    return $res;
}
