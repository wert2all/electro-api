<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Model\Api\DataValue;

use wert2all\electro_api\Model\Api\DataValue\Api\Data;
use wert2all\electro_api\Model\Api\DataValue\Api\Error;
use wert2all\DataValue\AbstractDataValue;
use wert2all\DataValue\Property;
use wert2all\DataValue\Property\PropertyInterface;
use wert2all\electro_api\Model\Api\IApi;

class Api extends AbstractDataValue implements IApi
{
    const VERSION_FIELD = "version";
    const ERROR_FIELD = "error";
    const DATA_FIELD = "data";

    /** @var  Data */
    protected $data;

    /**
     * @return PropertyInterface[]
     */
    protected function getInitPropertyList()
    {
        $this->data = new Data();
        $version = new Property(self::VERSION_FIELD);
        $version->setRequired();

        $error = new Property(self::ERROR_FIELD);
        $error->setRequired();
        return array(
            $version->setValue("1"),
            $error->setValue(new Error())
        );
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            self::VERSION_FIELD => $this->getProperty(self::VERSION_FIELD)->getValue(),
            self::ERROR_FIELD => $this->getProperty(self::ERROR_FIELD)->getValue()->toArray(),
            self::DATA_FIELD => $this->data->toArray()
        );
    }
}
