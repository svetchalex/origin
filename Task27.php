<?php
/**
 * @param $str
 *
 * @return array
 */
function wordsCount($str)
{
    $res_arr = [];
    if (!empty($str)) {
        $cnt = 0;
        $str = preg_replace('/( )+/', ' ', $str);
        $str = trim($str);
        $arr = explode(' ', $str);

        foreach ($arr as $item1) {
            foreach ($arr as $item2) {

                if ($item1 === $item2) {
                    $cnt++;
                }

            }
            $res_arr[$item1] = $cnt;
            $cnt = 0;
        }
    }
    return $res_arr;
}
