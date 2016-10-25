<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Unclonable;
use PHPUnit_Framework_TestCase;

class UnclonableTest extends PHPUnit_Framework_TestCase
{
    public function testCloneUnclonable()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Unclonable::class);
        clone $class;
    }
}
