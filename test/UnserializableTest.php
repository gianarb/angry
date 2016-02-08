<?php
namespace GianArb\AngryTest;

use GianArb\Angry\Unserializable;

class UnserializableTest extends \PHPUnit_Framework_TestCase
{
    public function testSerialize()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Unserializable::class);
        serialize($class);
    }
}
