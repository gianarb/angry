<?php

namespace GianArb\Angry;

use DomainException;

trait Unclonable
{
    public function __clone()
    {
        throw new DomainException(
            '__clone is disabled for this class'
        );
    }
}
