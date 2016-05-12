<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Framework\Controllers;


use wert2all\electro_api\Framework\Controllers\Virtual\AbstractController;
use wert2all\electro_api\Framework\Controllers\Virtual\IController;
use wert2all\electro_api\Framework\Exception\ControllerException;
use wert2all\electro_api\Framework\Request;

class Error404 extends AbstractController implements IController
{

    /**
     * @param Request $request
     * @return bool
     */
    public function isCurrent(Request $request)
    {
        return true;
    }

    /**
     * @param Request $request
     * @param \Throwable $exception
     * @return void
     * @throws ControllerException
     */
    public function run(Request $request)
    {
        echo "404";
    }
}
