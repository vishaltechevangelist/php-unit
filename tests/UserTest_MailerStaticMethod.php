<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\User_MailerStaticMethod;

class UserTest_MailerStaticMethod extends TestCase {
    public function testNotifyReturnsTrue() {
        $user = new User_MailerStaticMethod('vishal@gmail.com');
        $this->assertTrue($user->notify('Heloo'));
    }
}