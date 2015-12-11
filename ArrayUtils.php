<?php

namespace LAG\Component\ArrayUtils;

/**
 * Class ArrayUtils.
 *
 * @author lutangar
 */
class ArrayUtils
{
    /**
     * Return an imploded string from a multi dimensional array.
     *
     * @param string $glue
     * @param array  $array
     *
     * @return string
     */
    public static function recursiveImplode($glue, array $array)
    {
        $return = '';
        $index  = 0;
        $count  = count($array);

        foreach ($array as $piece) {
            if (is_array($piece)) {
                $return .= self::recursiveImplode($glue, $piece);
            } else {
                $return .= $piece;
            }

            if ($index < $count - 1) {
                $return .= $glue;
            }
            ++$index;
        }

        return $return;
    }
}
