<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace wert2all\electro_api\Framework\Controllers\Virtual;

interface IExceptionController extends IController
{

    /**
     * @param \Throwable $error
     * @return IExceptionController
     */
    public function setError(\Throwable $error);
}
