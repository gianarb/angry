<?php

namespace GianArb\AngryTest;

use GianArb\Angry\ClassDefence;
use \PHPUnit\Framework\TestCase;

class ClassDefenceTest extends TestCase
{
    public function testClone()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        clone $testClass;
    }

    public function testInvoke()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        $testClass();
    }

    public function testSerialize()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        serialize($testClass);
    }
}
