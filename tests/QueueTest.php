<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;
use UnitTestingApp\Queue;

class QueueTest extends TestCase {

    public function testQueueIsEmpty(): Queue {
        $queue = new Queue;
        $this->assertEmpty(0, $queue->getCount());
        return $queue;
    }

    #[Depends('testQueueIsEmpty')]
    public function testAnItemIsAddedToTheQueue(Queue $queue): void {
        $queue->push('Vishal');
        $this->assertEquals(1, $queue->getCount());
        
    }

    #[Depends('testQueueIsEmpty')]
    public function testAnItemIsRemovedFromTheQueue(Queue $queue): void {
        $item = $queue->pop();
        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('Vishal', $item);
    }
}