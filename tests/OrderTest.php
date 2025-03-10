<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Order;
use UnitTestingApp\PaymentGateway;

class OrderTest extends TestCase {
    public function testOrderTranscation(){
        //$payment_mock = $this->createMock(Payment::class); // willl throw an error for non-existent payment class
        $payment_mock = $this->getMockBuilder(PaymentGateway::class)
                             ->disableOriginalConstructor()
                             ->getMock(); // willl throw an erro
        $payment_mock->expects($this->once())
                     ->method('charge')
                     ->with($this->equalTo(200))
                     ->willReturn(true);
        $this->assertInstanceOf(PaymentGateway::class, $payment_mock);

        $order = new Order($payment_mock);
        $order->amount = 200;
        $this->assertTrue($order->process());
    }

}