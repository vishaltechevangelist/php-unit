<?php
namespace UnitTestingApp;

class Doctor extends AbstractPerson {
    public function  getTitle() : string {
        return 'Dr.';
    }
}