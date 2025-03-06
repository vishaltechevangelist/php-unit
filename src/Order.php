<?php
namespace UnitTestingApp;

class Order {
    public function __construct(Payment $payment) {
        $this->payment = $payment;
    }
}