<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Unclonable;
use PHPUnit\Framework\TestCase;

class UnclonableTest extends TestCase
{
    public function testCloneUnclonable()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\Unclonable');
        clone $testClass;
    }
}
