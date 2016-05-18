<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Tests\Specific\Model;

use PHPUnit_Framework_TestCase;
use Specific\Model\Api\Builder;
use Specific\Model\Api\IApi;

class ApiTest extends PHPUnit_Framework_TestCase
{

    public function testToArray()
    {
        /** @var IApi $api */
        $api = (new Builder())->build();

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
