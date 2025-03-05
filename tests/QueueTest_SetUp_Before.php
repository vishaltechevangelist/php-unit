<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Queue;

class QueueTest_SetUp_Before extends TestCase {

    protected static $queue;

    protected function setUp() : void {
        static::$queue->clear();
    }
   
    public static function setUpBeforeClass(): void {
        static::$queue = new Queue;
    }

    public static function tearDownAfterClass(): void {
        static::$queue = null;
    }

    public function testQueueIsEmpty(): void {
         $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue(): void {
        static::$queue->push('Vishal');
        $this->assertEquals(1, static::$queue->getCount());
        
    }

    public function testAnItemIsRemovedFromTheQueue(): void {

        static::$queue->push('Saxena');
        $this->assertEquals(1, static::$queue->getCount());

        $item = static::$queue->pop();
        $this->assertEquals("Saxena", $item);
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testTheSequenceQueueItem(): void {
        static::$queue->push("vishal");
        static::$queue->push("saxena");

        $this->assertEquals("vishal", static::$queue->pop());
    }
}