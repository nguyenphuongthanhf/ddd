<?php
namespace ThanhsMind\DDD;

abstract class AbstractValueObject implements ValueObjectInterface{

    /**
     * @param $object
     * @throws \InvalidArgumentException
     */
    public function isTheSameClass($object){
        $result = (get_called_class() === get_class($object));

        if(!$result){
            throw new \InvalidArgumentException('Wrong input value, expected: '.get_called_class());
        }
    }
}