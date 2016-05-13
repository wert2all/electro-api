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
use wert2all\electro_api\Framework\Request\IRequest;

class ThrowError extends AbstractExceptionController
{

    /**
     * @param IRequest $request
     */
    protected function throwException(IRequest $request)
    {
        echo $this->error->getMessage();
    }
}
