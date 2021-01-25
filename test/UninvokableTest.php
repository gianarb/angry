<?php

namespace GianArb\AngryTest;

use GianArb\Angry\Uninvokable;
use PHPUnit\Framework\TestCase;

class UninvokableTest extends TestCase
{
    public function testInvoke()
    {
        $this->expectException('DomainException');
        $testClass = $this->getMockForTrait('GianArb\Angry\Uninvokable');
        $testClass();
    }
}
