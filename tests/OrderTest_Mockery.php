<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use UnitTestingApp\Order;
use UnitTestingApp\PaymentGateway;

class OrderTest_Mockery extends MockeryTestCase {

    public function testOrderTransaction() : void {

        $payment_gateway = Mockery::mock(PaymentGateway::class);
        $payment_gateway->shouldReceive('charge')
                        ->once()
                        ->with(200)
                        ->andReturn(true);

        $order = new Order($payment_gateway);
        $order->amount = 200;
        $this->assertTrue($order->process());
    }

}