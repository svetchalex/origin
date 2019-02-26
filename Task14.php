<?php
/**
 * @param $definitions
 *
 * @return mixed
 */
function buildDefinitionList($definitions)
{
    $str = '<dl>';
    foreach ($definitions as $definition) {
        $definition[0] = '<dt>' . $definition[0] . '</dt>';
        $definition[1] = '<dd>' . $definition[1] . '</dd>';
        $str = $str . $definition[0] . $definition[1];
    }
    $str .= '</dl>';
    return $str;
}

