<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Unserializable;
use PHPUnit_Framework_TestCase;

class UnserializableTest extends PHPUnit_Framework_TestCase
{
    public function testSerialize()
    {
        $this->setExpectedException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\Unserializable');
        serialize($testClass);
    }
}
