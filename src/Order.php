<?php
namespace UnitTestingApp;

class Order {
    public $amount = 0;
    protected $gateway;
    public function __construct(PaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function process(): bool{
        return $this->gateway->charge($this->amount);
    }
}