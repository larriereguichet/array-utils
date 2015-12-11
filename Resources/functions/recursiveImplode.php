<?php

use LAG\Component\ArrayUtils\ArrayUtils;

if (!function_exists('dump')) {
    /**
     * @param string $glue
     * @param array  $array
     *
     * @return string
     *
     * @author Arnaud Frezet <arnaudfrezet@gmail.com>
     */
    function recursiveImplode($glue, array $array)
    {
        return ArrayUtils::recursiveImplode($glue, $array);
    }
}
