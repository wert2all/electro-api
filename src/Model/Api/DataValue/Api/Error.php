<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Model\Api\DataValue\Api;

use wert2all\DataValue\AbstractDataValue;
use wert2all\DataValue\Property;
use wert2all\DataValue\Property\PropertyInterface;
use wert2all\electro_api\Model\Api\IApi;

class Error extends AbstractDataValue implements IApi
{
    const STATUS_FIELD = "status";
    const MESSAGE_FIELD = "message";

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            self::STATUS_FIELD => $this->getProperty(self::STATUS_FIELD)->getValue(),
            self::MESSAGE_FIELD => $this->getProperty(self::MESSAGE_FIELD)->getValue()
        );
    }

    /**
     * @return PropertyInterface[]
     */
    protected function getInitPropertyList()
    {
        return array(
            (new Property(self::STATUS_FIELD))->setRequired()->setValue(false),
            (new Property(self::MESSAGE_FIELD))->setRequired()->setValue("")
        );
    }
}
