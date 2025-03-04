<?php
namespace UnitTestingApp;

class User{
    public string $firstname;
    public string $surname;

    public function getFullName(): string {

        $this->firstname = $this->firstname ?? '';
        $this->surname = $this->surname ?? '';    
        //return $this->firstname . " " . $this->surname; // This is bug which send space hence fix this using trim
        return trim($this->firstname . " " . $this->surname);
    }
}
