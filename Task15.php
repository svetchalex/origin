<?php
/**
 * @param $sentence
 * @param $words
 *
 * @return string
 */
function makeCensored($sentence, $words)
{
    //$str = $sentence;
    $arr = explode(' ', $sentence);
    foreach ($arr as $key => $item) {
        foreach ($words as $word) {
            if ($item === $word) {
                $arr[$key] = '$#%!';
            }
        }
    }
    $str = implode(' ', $arr);
    return $str;
}
