<?php
namespace GianArb\AngryTest;

use GianArb\Angry\Uninvokable;

class UninvokableTest extends \PHPUnit_Framework_TestCase
{
    public function testInvoke()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Uninvokable::class);
        $class();
    }
}
