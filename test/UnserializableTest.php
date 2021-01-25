<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Unserializable;
use \PHPUnit\Framework\TestCase;

class UnserializableTest extends \PHPUnit\Framework\TestCase
{
    public function testSerialize()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\Unserializable');
        serialize($testClass);
    }
}
