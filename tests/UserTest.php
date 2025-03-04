<?php

require __DIR__."/../User.class.php";

use PHPUnit\Framework\TestCase;

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
}