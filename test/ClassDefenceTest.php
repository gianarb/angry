<?php

namespace GianArb\AngryTest;

use GianArb\Angry\ClassDefence;
use PHPUnit_Framework_TestCase;

class ClassDefenceTest extends PHPUnit_Framework_TestCase
{
    public function testClone()
    {
        $this->setExpectedException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        clone $testClass;
    }

    public function testInvoke()
    {
        $this->setExpectedException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        $testClass();
    }

    public function testSerialize()
    {
        $this->setExpectedException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\ClassDefence');
        serialize($testClass);
    }
}
