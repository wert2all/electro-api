<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Framework;


class _
{

    public static function _($value)
    {
        highlight_string(print_r($value, true));
    }
}
