<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\OrderNew;
use UnitTestingApp\PaymentGateway;

class OrderNewTest extends TestCase {
    public function testProcess() {
        $order = new OrderNew(3, 1.99);
        $this->assertEquals(5.97, $order->amount);

        $payment_mock = Mockery::mock(PaymentGateway::class);
        $payment_mock->shouldReceive('charge')
                     ->once()
                     ->with(5.97);
                
        $order->process($payment_mock);
    }

    public function testProcessSpy() {
        $order = new OrderNew(3, 1.99);
        $this->assertEquals(5.97, $order->amount);

        $payment_spy = Mockery::spy(PaymentGateway::class);
        $order->process($payment_spy);

        $payment_spy->shouldHaveReceived('charge')
                    ->once()
                    ->with(5.97);
    }
}