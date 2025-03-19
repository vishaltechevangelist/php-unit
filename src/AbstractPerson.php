<?php
namespace UnitTestingApp;

abstract class AbstractPerson {
    protected $username;

    public function __construct($username) {
        $this->username = $username;
    }

    abstract protected function getTitle(); // implemented in subclass

    public function getNameAndTitle() {
        return $this->getTitle() . ' ' . $this->username; 
    }
}