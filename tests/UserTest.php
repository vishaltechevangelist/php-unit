<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\User;

class UserTest extends TestCase {
    public function testReturnFullName() {
        $user = new User;
        $user->firstname = "Vishal";
        $user->surname = "Saxena";
        $this->assertEquals("Vishal Saxena", $user->getFullName());
    }

    public function testReturnEmpty() {
        $user = new User;
        $this->assertEquals("", $user->getFullName());
    }

    public function UserHasFirstName() {
        $user = new User;
        $user->firstname = "Vishal";
        $this->assertEquals("Vishal", $user->firstname);
    }
}