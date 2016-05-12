<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Specific\Controllers;


use wert2all\electro_api\Framework\Controllers\Virtual\AbstractController;
use wert2all\electro_api\Framework\Controllers\Virtual\IController;
use wert2all\electro_api\Framework\Exception\ControllerException;
use wert2all\electro_api\Framework\Request;

class Api extends AbstractController implements IController
{

    /**
     * @param Request $request
     * @return bool
     */
    public function isCurrent(Request $request)
    {
        // TODO: Implement isCurrent() method.
        return false;
    }

    /**
     * @param Request $request
     * @return void
     * @throws ControllerException
     */
    public function run(Request $request)
    {
        // TODO: Implement run() method.
    }
}
