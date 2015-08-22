<?php
namespace DDD\Contract\Exceptions;


class PreconditionException extends \Exception
{
    public function __construct($reason, $value = false)
    {
        $message = 'Precondition: The expectation ' . $reason . ' is violated';
        if ($value) {
            $message .= "; value tested was '" . print_r($value, true) . "'";
        }

        parent::__construct($message);
    }

}