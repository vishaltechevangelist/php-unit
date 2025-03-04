<?php
require __DIR__."/../function.php";

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {

    public function testAddReturnCorrectSum() {
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(5, add(2,3));
    }

    public function testAddReturnIncorrectSum() {
        $this->assertNotEquals(5, add(2,2));
        $this->assertNotEquals(3, add(2,2));   
    }
}