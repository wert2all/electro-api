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
use wert2all\electro_api\Framework\Request\IRequest;

class Api extends AbstractController implements IController
{

    /**
     * @param IRequest $request
     * @return bool
     */
    public function isCurrent(IRequest $request)
    {
        // TODO: Implement isCurrent() method.
        return false;
    }

    /**
     * @param IRequest $request
     * @return void
     * @throws ControllerException
     */
    public function run(IRequest $request)
    {
        // TODO: Implement run() method.
    }
}
