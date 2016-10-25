<?php

namespace GianArb\Angry;

use DomainException;

trait Uninvokable
{
    public function __invoke()
    {
        throw new DomainException(
            '__invoke is disabled for this class'
        );
    }
}
