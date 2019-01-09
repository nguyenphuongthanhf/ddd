<?php

namespace ThanhsMind\DDD\Command;

use Exception;

trait ReturnableCommandTrait {

    /**
     * @var Exception[]
     */
    private $_exceptions = array();

    /**
     * @var mixed
     */
    private $_result = NULL;

    /**
     * @param Exception $e
     *
     * @return mixed
     */
    public function addException(Exception $e) {
        $this->_exceptions[] = $e;
    }

    /**
     * @return Exception
     */
    public function getExceptions() {
        return $this->_exceptions;
    }

    /**
     * @return boolean
     */
    public function isFail() {
        return (!$this->isSuccess());
    }

    /**
     * @return boolean
     */
    public function isSuccess() {
        return empty($this->_exceptions);
    }


    /**
     * @param $result
     *
     * @return mixed
     */
    public function setResult($result) {
        $this->_result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult() {
        return $this->_result;
    }
}
