<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Controllers;

use wert2all\wFrame\Controllers\Virtual\AbstractExceptionController;
use wert2all\wFrame\Request\IRequest;

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
