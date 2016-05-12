<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Framework\Controllers\Virtual;

use wert2all\electro_api\Framework\Exception\ControllerException;
use wert2all\electro_api\Framework\Request;

interface IController
{

    /**
     * @param Request $request
     * @return bool
     */
    public function isCurrent(Request $request);

    /**
     * @param Request $request
     * @return void
     * @throws ControllerException
     */
    public function run(Request $request);
}
