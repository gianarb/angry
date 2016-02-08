<?php
namespace GianArb\Ungry;

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
