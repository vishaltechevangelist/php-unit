<?php

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Order;

class OrderTest extends TestCase {
    public function testOrderTranscation(){
        //$payment_mock = $this->createMock(Payment::class); // willl throw an error for non-existent payment class
        $payment_mock = $this->getMockBuilder(Payment::class)
                            ->getMock(); // willl throw an erro
        $order = new Order($payment_mock);
    }

}