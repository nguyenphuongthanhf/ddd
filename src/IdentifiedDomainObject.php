<?php
namespace ThanhsMind\DDD;


abstract class IdentifiedDomainObject {

    /**
     * @var int
     */
    private $id;

    /**
     * @return int
     */
    protected function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    protected function setId($id) {
        $this->id = $id;
    }

}