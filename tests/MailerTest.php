<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Mailer;

class MailerTest extends TestCase {
    public function testSendMessage(): void {
        // $mailer = new Mailer;
        $mailer = $this->createMock(Mailer::class);   //Mocking mailer class
        //print_r($mailer);
        $mailer->method('sendMessage') // kind of hardcoding the return value of method
               ->willReturn(true);

        $result = $mailer->sendMessage("vishal@example.com", "Hi Vishal"); // calling stub using mailer class
        //print_r($result);

        $this->assertTrue($result);
    }
}