<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Model\Api;

use wert2all\electro_api\Model\Api\DataValue\Api;

class Builder
{

    public function __construct($version)
    {

    }

    /**
     * @return IApi
     */
    public function build()
    {
        return new Api();
    }
}
