<?php

namespace UnitTestingApp;

class Item {
    public function getDescription() {
        return $this->getID() . $this->getToken();
    }

    protected function getId() : int {
        return rand();
    }

    private function getToken() : string {
        return uniqid();
    }

    private function getTokenWithPrefix(string $prefix) : string {
        return uniqid($prefix);
    }
}