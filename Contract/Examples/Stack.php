<?php
namespace DDD\Examples\Contract;


use DDD\Contract\Assertion;


/**
 * Implement example Stack on Book Object Orient Construct of
 *
 * Chapter 11 about Design by Constract with PreCondition - PostCondition Technique
 *
 * Class Stack
 * @package DDD\Examples
 */
class Stack {
    private $_stack;

    private function isFull(){
        if(count($this->_stack) >10){
            return TRUE;
        }

        return FALSE;
    }

    private function isEmpty(){
        if(empty($this->_stack)){
            return TRUE;
        }

        return FALSE;
    }

    private function getLast(){
        $stack = $this->_stack;

        return array_pop($stack);
    }


    /**
     * Add a item to stack
     * Required: Stack is not full
     * Required: $item is not null
     * Required: $item is not empty
     *
     * Ensure: Stack is not Empty
     * Ensure: Total item increase 1
     * Ensure: Last item of stack the same with item added
     *
     * @param $item
     * @throws \DDD\Contract\Exceptions\PreconditionException
     */
    public function add($item){
        Assertion::Requires(!$this->isFull(), "Stack not full");
        Assertion::RequireNotNull($item, 'item');
        Assertion::Requires(!empty($item), 'Item is not empty');

        $old_count = count($this->_stack);
        $this->_stack[] = $item;

        Assertion::Ensure(!$this->isEmpty(), 'Stack is not empty');
        Assertion::Ensure($old_count==count($this->_stack), 'Total item increase 1');
        Assertion::Ensure($item == $this->getLast(), 'Last item of stack the same item added' );
    }

    /**
     * Remove a item of stack
     *
     * Required: stack is not empty
     *
     *
     * Ensure: Stack is not full
     *
     * @param $item
     */
    public function remove($item){
        Assertion::Requires($this->isEmpty(), 'Stack is not empty');

        $old_count = count($this->_stack);
        // do remove item add here

        Assertion::Ensure(!$this->isFull(), 'Stack is not full;');
        Assertion::Ensure(count($this->_stack) === $old_count-1, 'Total item of stack decrease 1');
    }
}