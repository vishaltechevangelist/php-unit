<?php
namespace UnitTestingApp\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use UnitTestingApp\Mailer;
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

    public function testNotify() {
        $user = new User;
        $user->firstname = "Vishal";
        
        $mailer = $this->createMock(Mailer::class); 
        $mailer->expects($this->once())
               ->method('sendMessage')
               ->with($this->equalTo("vishalsaxena@gmail.com"), $this->equalTo("Hello"))
               ->willReturn(true);

        $user->setMailer($mailer);
        $user->email = "vishalsaxena@gmail.com";
        $this->assertTrue($user->notify("Hello"));
    }

    public function testNotifyWithBlankEmail() : void {
        $user = new User;
        $user->firstname = "Vishal";

        $mailer = $this->getMockBuilder(Mailer::class)
                       ->onlyMethods([])
                       ->getMock();

        $user->email = "";               
        $user->setMailer($mailer);

        $this->expectException(Exception::class);
        $this->assertTrue($user->notify("Hello"));
    }
}