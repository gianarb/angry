<?php
namespace GianArb\AngryTest;

use GianArb\Angry\Unclonable;

class UnclonableTest extends \PHPUnit_Framework_TestCase
{
    public function testCloneUnclonable()
    {
        $this->setExpectedException('DomainException');
        $class = $this->getMockForTrait(Unclonable::class);
        clone $class;
    }
}
