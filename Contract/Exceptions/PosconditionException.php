<?php
namespace DDD\Contract\Exceptions;


class PostconditionException extends \Exception
{
    public function __construct($reason, $value = false)
    {
        $message = 'Postcondition: The expectation ' . $reason . ' is violated';
        if ($value) {
            $message .= "; value tested was '" . print_r($value, true) . "'";
        }

        parent::__construct($message);
    }

}