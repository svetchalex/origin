<?php
$last = function ($str) {
    $res = null;
    if (!empty($str)) {
        $len = mb_strlen($str);
        $res = mb_substr($str, $len - 1, 1);
    }
    return $res;
};

