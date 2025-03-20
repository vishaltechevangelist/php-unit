<?php
namespace UnitTestingApp\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use UnitTestingApp\Mailer_StaticMethod;

class Mailer_StaticMethod_Test extends TestCase{
    public function testValidSendMessage() {
        $this->assertTrue(Mailer_StaticMethod::sendMessage('vishal@gmail.com', "Hi"));
    }

    public function testExceptionSendMessage() {
        $this->expectException(Exception::class);
        Mailer_StaticMethod::sendMessage('', "Hi");
    }
}