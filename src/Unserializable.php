<?php
namespace GianArb\Angry;

use DomainException;

trait Unserializable
{
    public function __sleep()
    {
        throw new DomainException(
            "I am not your plump child"
        );
    }
}
