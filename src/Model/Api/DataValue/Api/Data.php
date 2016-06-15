<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Model\Api\DataValue\Api;

use wert2all\electro_api\Model\Api\IApi;

class Data implements IApi
{
    protected $data = array();

    /**
     * @return array
     */
    public function toArray()
    {
        $return = array();
        /** @var IApi $value */
        foreach ($this->data as $value) {
            $return[] = $value->toArray();
        }

        return $return;
    }
}
