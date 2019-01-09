<?php
namespace Mio\DDD\Command;

use Respect\Validation\Exceptions\AllOfException;

use Exception;

class InvalidCommandException extends Exception {

    private $errors= array();

    /**
     * @param AllOfException $e
     * @param array          $templates
     *
     * @return InvalidCommandException
     */
    public static function fromRespectException(AllOfException $e, array $templates) {
        $exception = new self('Can not run command because input parameters are invalid. Use getErrors() for detail errors.');
        $exception->errors = array_filter($e->findMessages($templates));

        return $exception;
    }

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }
}