<?php
namespace UnitTestingApp;

class Queue {

    protected $queue = [];

    public function push($item): void{
        $this->queue[] = $item;
    }
    public function pop(): string {
        return array_pop($this->queue);
    }
    public function getCount(): int {
        return count($this->queue);
    }
}