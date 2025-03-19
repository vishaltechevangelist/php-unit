<?php

namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Item;
use UnitTestingApp\ItemChild;

class ItemTest extends TestCase {
    
    public function testDescriptionIsNotEmpty() {
        $item = new Item;
        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInteger() {
        //$item = new Item;
        $item = new ItemChild;
        $this->assertIsInt($item->getId());
    }

    public function testTokenAsString() {
        $itemchild = new ItemChild;
        $this->assertIsString($itemchild->getToken());
    }
}