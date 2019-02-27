<?php
/**
 * @param $number
 */
function sayPrimeOrNot($number)
{
    $ispr = isPrime($number);
    if ($ispr === true) {
        print_r('yes');
    } else {
        print_r('no');
    }
}

/**
 * @param $n
 *
 * @return bool
 */
function isPrime($n)
{
    $pr = true;
    $sq = sqrt($n);
    for ($x = 2; $x <= $sq; $x++) {
        if ($n % $x === 0) {
            $pr = false;
            break;
        }
    }
    return $pr;
}

