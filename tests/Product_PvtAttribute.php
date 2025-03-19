<?php

namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use UnitTestingApp\Product;

class Product_PvtAttribute extends TestCase {
    public function  testProductId() : void {
        $product = new Product;

        $reflactor = new ReflectionClass(Product::class);
        $property = $reflactor->getProperty('productId');
        $property->setAccessible(true);
        $value = $property->getValue($product);

        $this->assertIsInt($value);
    }
}