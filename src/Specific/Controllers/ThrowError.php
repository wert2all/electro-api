<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Specific\Controllers;


use wert2all\electro_api\Framework\Controllers\Virtual\AbstractExceptionController;
use wert2all\electro_api\Framework\Request;

class ThrowError extends AbstractExceptionController
{

    protected function throwException(Request $request)
    {
        echo $this->error->getMessage();
    }
}
