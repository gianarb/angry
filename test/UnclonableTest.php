<?php
namespace GianArb\UngryTest;

use GianArb\Ungry\Unclonable;

class UnclonableTest extends \PHPUnit_Framework_TestCase
{
    public function testCloneUnclonable()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Unclonable::class);
        clone $class;
    }
}
