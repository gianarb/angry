<?php
namespace GianArb\Angry;

use DomainException;

trait Unclonable
{
    public function __clone()
    {
        throw new DomainException(
            "I am unique for you!"
        );
    }
}
