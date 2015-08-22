<?php
namespace DDD\Contract;


use DDD\Contract\Exceptions\ConditionException;
use DDD\Contract\Exceptions\PostconditionException;
use DDD\Contract\Exceptions\PreconditionException;

class Assertion
{
    /**
     * Precondition.
     * @param  $condition :expect to be true
     * @param  $description :the condition or describles it in other words.
     * @throws PreconditionException
     */
    public static function Requires($condition, $description)
    {
        if (!$condition) {
            throw new PreconditionException($description);
        }
    }

    /**
     * Precondition.
     * @param $objectToBeTested :is an object we expect to be not null
     * @param $objectName :is the name of the variable we test.
     * @throws PreconditionException
     */
    public static function RequireNotNull($objectToBeTested, $objectName)
    {
        if (!is_null($objectToBeTested)) {
            throw new PreconditionException($objectName);
        }
    }

    /**
     * Postcondition.
     * @param $condition :we expect to be true.
     * @param $description :repeats the condition or describes it in
     * other words.
     * @throws PostconditionException
     */
    public static function Ensure($condition, $description)
    {
        if (!$condition) {
            throw new PostconditionException($description);
        }
    }

    /**
     * Common condition to be used in the middle of methods
     * @param $condition :we expect to be true.
     * @param $description :repeats the condition or describes it in
     * other words.
     * @throws ConditionException
     */
    public static function Check($condition, $description)
    {
        if (!$condition) {
            throw new ConditionException($description);
        }
    }
}