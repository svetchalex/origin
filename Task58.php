<?php
/**
 * @param $dir
 *
 * @return bool
 */
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir, SCANDIR_SORT_NONE);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (filetype($dir . '/' . $object) === 'dir') {
                    rrmdir($dir . '/' . $object);
                } else {
                    unlink($dir . '/' . $object);
                }
            }
        }
        reset($objects);
        rmdir($dir);
    }
return true;
}
