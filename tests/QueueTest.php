<?php
namespace UnitTestingApp\Tests;

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;
use UnitTestingApp\Queue;
use UnitTestingApp\QueueException;

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

    public function testQueueException(): void{
        $queue = new Queue;
        $queue->addItemWithMaxCount(); 
        $this->assertEquals($queue::MAX_ITEM, $queue->getCount());  

        $this->expectException(QueueException::class);
        $this->expectExceptionMessage("Queue is full");
        $queue->push('vishal');
    }
}