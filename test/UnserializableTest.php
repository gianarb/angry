<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Unserializable;
use \PHPUnit\Framework\TestCase;

class UnserializableTest extends TestCase
{
    public function testSerialize()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\Unserializable');
        serialize($testClass);
    }
}
