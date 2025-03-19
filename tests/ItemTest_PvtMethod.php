<?php

namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use UnitTestingApp\Item;

class ItemTest_PvtMethod extends TestCase {
    public function testGetToken() : void {
        $item = new Item;

        $reflactor = new ReflectionClass(Item::class);
        $method = $reflactor->getMethod('getToken');
        $method->setAccessible(true);
        $result = $method->invoke($item);
    
        // $this->assertIsString($item->getToken()); // getToken is private, phpunit throwing error
        $this->assertIsString($result); 
    }

    public function testPrefixedTokenStartsWithPrefix() {
        $item = new Item;

        $reflactor = new ReflectionClass(Item::class);
        $method = $reflactor->getMethod('getTokenWithPrefix');
        $method->setAccessible(true);
        $result = $method->invokeArgs($item, ['example']); // object with argument in array

        $this->assertStringStartsWith('example', $result);
    }
}