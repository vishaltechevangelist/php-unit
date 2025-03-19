<?php

namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Item;

class ItemTest extends TestCase {
    
    public function testDescriptionIsNotEmpty() {
        $item = new Item;
        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInteger() {
        $item = new Item;
        $this->assertIsInt($item->getId());
    }
}