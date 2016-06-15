<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Tests\Model;

use PHPUnit_Framework_TestCase;
use wert2all\electro_api\Model\Api\Builder;
use wert2all\electro_api\Model\Api\IApi;

class ApiTest extends PHPUnit_Framework_TestCase
{

    public function testToArray()
    {
        /** @var IApi $api */
        $api = (new Builder(1))->build();

        $this->assertEquals(
            array(
                "version" => 1,
                "error" => array(
                    "status" => false,
                    "message" => ""
                ),
                "data" => array()
            ),
            $api->toArray()
        );

    }
}
