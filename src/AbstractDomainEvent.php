<?php
namespace ThanhsMind\DDD;


abstract class AbstractDomain implements DomainEventInterface{

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