<?php
namespace UnitTestingApp;

class OrderNew {
    public $amount;
    public $unit;
    public $cost;

    public function __construct(int $unit, float $cost) {
        $this->unit = $unit;
        $this->cost = $cost;
        $this->amount = $this->unit * $this->cost;
    }

    public function process(PaymentGateway $payment) {
        return $payment->charge($this->amount);
    }
}