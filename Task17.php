<?php
/**
 * @param $text
 *
 * @return int
 */
function countUniqChars($text)
{
    $res = 0;
    if (!empty($text)) {
        $len = mb_strlen($text);
        for ($k = 0; $k < $len; $k++) {
            $chars[] = mb_substr($text, $k, 1);
        }
        foreach ($chars as $key1 => $char) {
            foreach ($chars as $key2 => $item) {
                if ($char === $item && $key1 !== $key2) {
                    unset($chars[$key1]);
                }
            }
        }
        $res = count($chars);
    }
    return $res;
}


