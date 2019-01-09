<?php
namespace Mio\DDD;


use Anphabe\Component\Id\Sequence;

abstract class IdentifiedValueObject {


    /** @var int */
    protected $index;

    public function __construct($index_name){
        $generator = new Sequence();
        $this->_index = $generator->generate($index_name);
    }

    /** @return int */
    public function getIndex() {
        return $this->_index;
    }

    /** @param int $index */
    protected function setIndex($index) {
        $this->_index = $index;
    }

}