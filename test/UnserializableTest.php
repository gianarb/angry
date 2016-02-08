<?php
namespace GianArb\UngryTest;

use GianArb\Ungry\Unserializable;

class UnserializableTest extends \PHPUnit_Framework_TestCase
{
    public function testSerialize()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Unserializable::class);
        serialize($class);
    }
}
