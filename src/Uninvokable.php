<?php
namespace GianArb\Angry;

use DomainException;

trait Uninvokable
{
    public function __invoke()
    {
        throw new DomainException(
            "Why you are doing this!! At me!"
        );
    }
}
