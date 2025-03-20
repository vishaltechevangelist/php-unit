<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Mailer_StaticMethod;
use UnitTestingApp\User_MailerStaticMethod;

class UserTest_MailerStaticMethod extends TestCase {
    public function testNotifyReturnsTrue() {
        $user = new User_MailerStaticMethod('vishal@gmail.com');

        //$mailer = new Mailer_StaticMethod;
        $mailer = $this->createMock(Mailer_StaticMethod::class); //This will throw static method can't be invokded on mock object
        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello'));
    }
}