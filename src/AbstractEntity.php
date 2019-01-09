<?php
namespace ThanhsMind\DDD;


abstract class AbstractEntity implements EntityInterface{

    /**
     * @param $object
     * @throws \InvalidArgumentException
     */
    protected function isTheSameCurrentClass($object){
        $result = (get_called_class() === get_class($object));

        if(!$result){
            throw new \InvalidArgumentException('Wrong input value, expected: '.get_called_class());
        }
    }
}