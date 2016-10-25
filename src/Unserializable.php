<?php

namespace GianArb\Angry;

use DomainException;

trait Unserializable
{
    public function __sleep()
    {
        throw new DomainException(
            '__sleep (serialize) is disabled for this class'
        );
    }
}
