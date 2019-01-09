<?php
namespace ThanhsMind\DDD\Command;

use Exception;

interface CommandInterface {

    /**
     * @param Exception $e
     *
     * @return mixed
     */
    public function addException(Exception $e);

    /**
     * @return Exception
     */
    public function getExceptions();

    /**
     * @return bool
     */
    public function isFail();

    /**
     * @return bool
     */
    public function isSuccess();

    /**
     * @param $result
     *
     * @return mixed
     */
    public function setResult($result);

    /**
     * @return mixed
     */
    public function getResult();
}
