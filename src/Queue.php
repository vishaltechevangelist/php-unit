<?php
namespace UnitTestingApp;

use UnitTestingApp\QueueException;

class Queue {

    protected $queue = [];
    const MAX_ITEM = 5;

    public function push($item): void {
        if (count($this->queue) == self::MAX_ITEM) {
            throw new QueueException("Queue is full");
        }
        $this->queue[] = $item;
    }
    
    public function pop(): string {
        //return array_pop($this->queue);
        return array_shift($this->queue);
    }
    
    public function getCount(): int {
        return count($this->queue);
    }

    public function clear() : void {
        $this->queue = [];
    }

    public function addItemWithMaxCount() : void {
        for($i=0;$i<self::MAX_ITEM;$i++) {
            $this->queue[] = $i;
        }
    }
}