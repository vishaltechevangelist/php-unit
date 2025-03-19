<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\AbstractPerson;
use UnitTestingApp\Doctor;

class AbstractPersonTest extends TestCase {
    public function testNameAndTitleIsReturned() {
        $doctor = new Doctor('Vishal');
        $this->assertEquals('Dr. Vishal', $doctor->getNameAndTitle());
    }

    public function testNameAndTitleIncludesValueFromGetTitle() {
        //getMockForAbstractClass is removed in phpunit 12
        $mock = $this->getMockBuilder(AbstractPerson::class)
                     ->setConstructorArgs(['Vishal'])
                     ->onlyMethods(['getTitle'])
                     ->getMock();

        $mock->method('getTitle')->willReturn('Dr.');

        $this->assertEquals('Dr. Vishal', $mock->getNameAndTitle());
    }
}