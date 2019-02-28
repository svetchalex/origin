<?php
/**
 * @param mixed ...$args
 *
 * @return mixed
 */
function without(...$args){
    $arr = $args[0];
    unset($args[0]);
    foreach ($arr as $key => $item){
        foreach ($args as $arg){
            if($item === $arg){
                unset($arr[$key]);
            }
        }
    }
   return $arr;
}
