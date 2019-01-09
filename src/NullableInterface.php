<?php
namespace Mio\DDD;


interface NullableInterface {

    /**
     * @return bool
     */
    public function isNull();
}