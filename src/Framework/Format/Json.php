<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Framework\Format;

use Framework\Exception\FormatException;

class Json
{

    /**
     * @param mixed $value
     * @return string
     * @throws FormatException
     */
    public static function encode($value)
    {
        $return = json_encode($value);
        if (false === $return) {
            throw new FormatException(json_last_error_msg());
        }
        return $return;
    }

    public static function decode($string)
    {
        $return = json_decode($string);
        if (false === $return) {
            throw new FormatException(json_last_error_msg());
        }
        return $return;
    }
}
