<?php
namespace UnitTestingApp;

class ItemChild extends Item {
    public function getId() : int {
        return parent::getId();
    }

    public function getToken() : string {
        return parent::getToken();
    }
}