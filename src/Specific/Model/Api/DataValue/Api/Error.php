<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Specific\Model\Api\DataValue\Api;

use Specific\Model\Api\IApi;
use wert2all\DataValue\AbstractDataValue;
use wert2all\DataValue\Property;
use wert2all\DataValue\Property\PropertyInterface;

class Error extends AbstractDataValue implements IApi
{
    const STATUS_FIELD = "status";
    const MESSAGE_FIELD = "message";

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
}
