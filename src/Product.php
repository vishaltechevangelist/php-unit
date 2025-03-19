<?php
namespace UnitTestingApp;

class Product {
    protected $productId;

    public function __construct() {
        $this->productId = rand();
    }
}