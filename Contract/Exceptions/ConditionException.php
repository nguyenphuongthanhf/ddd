<?php
namespace DDD\Contract\Exceptions;


class ConditionException extends \Exception
{
    public function __construct($reason, $value = false)
    {
        $message = 'Condition: The expectation ' . $reason . ' is violated';
        if ($value) {
            $message .= "; value tested was '" . print_r($value, true) . "'";
        }

        parent::__construct($message);
    }

}