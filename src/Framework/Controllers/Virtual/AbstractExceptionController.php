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

abstract class AbstractExceptionController implements IExceptionController
{
    /** @var  \Throwable */
    protected $error;

    /**
     * @param Request $request
     * @return bool
     */
    public function isCurrent(Request $request)
    {
        return true;
    }

    /**
     * @param \Throwable $error
     * @return IExceptionController
     */
    public function setError(\Throwable $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @param Request $request
     * @throws ControllerException
     */
    final public function run(Request $request)
    {
        if (is_null($this->error)) {
            throw new ControllerException("Cant get a Exception object.");
        }
        $this->throwException($request);
    }

    abstract protected function throwException(Request $request);
}
