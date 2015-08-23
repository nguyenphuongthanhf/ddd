<?php
namespace DDD\Contract;


use DDD\Contract\Exceptions\ConditionException;
use DDD\Contract\Exceptions\PostconditionException;
use DDD\Contract\Exceptions\PreconditionException;


/**
 * Inspire by  Object-Oriented Software Construction Bertrand Meyer
 * and http://svengrand.blogspot.com/2008/11/preconditions-postconditions-invariants.html
 *
 * Class Assertion
 * @package DDD\Contract
 */
class Assertion
{
    /**
     * Precondition.
     * @param  $condition :expect to be true
     * @param  $description :the condition or describles it in other words.
     * @throws PreconditionException
     */
    public static function requires($condition, $description)
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
    public static function requireNotNull($objectToBeTested, $objectName)
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
    public static function ensure($condition, $description)
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
    public static function check($condition, $description)
    {
        if (!$condition) {
            throw new ConditionException($description);
        }
    }
}