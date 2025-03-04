<?php

class User{
    public string $firstname;
    public string $surname;

    public function getFullName(): string {

        $this->firstname = $this->firstname ?? '';
        $this->surname = $this->surname ?? '';    
        return $this->firstname . " " . $this->surname;
    }
}
