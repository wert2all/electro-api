<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Specific\Model\Api;

use Specific\Model\Api\DataValue\Api;

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
