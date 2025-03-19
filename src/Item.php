<?php

namespace UnitTestingApp;

class Item {
    public function getDescription() {
        return $this->getID() . $this->getToken();
    }

    protected function getId() : int {
        return rand();
    }

    protected function getToken() : string {
        return uniqid();
    }
}