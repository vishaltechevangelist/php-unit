<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\TestCase;
use UnitTestingApp\Queue;

class QueueTest_SetUp extends TestCase {

    protected $queue;
    protected function setUp(): void {
        $this->queue = new Queue;
    }

    protected function tearDown(): void {
        unset($this->queue);
    }

    public function testQueueIsEmpty(): void {
        $this->assertEquals(0, $this->getCount());
    }

    public function testAnItemIsAddedToTheQueue(): void {
        $this->queue->push('Vishal');
        $this->assertEquals(1, $this->queue->getCount());
        
    }

    public function testAnItemIsRemovedFromTheQueue(): void {
        $this->queue->push('Saxena');
        $this->assertEquals(1, $this->queue->getCount());
        $item = $this->queue->pop();
        $this->assertEquals("Saxena", $item);
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testTheSequenceQueueItem(): void {
        $this->queue->push("vishal");
        $this->queue->push("saxena");

        $this->assertEquals("vishal", $this->queue->pop());
    }
}