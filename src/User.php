<?php
namespace UnitTestingApp;

class User{
    public string $firstname;
    public string $surname;
    public string $email;
    protected Mailer $mailer;

    public function setMailer($mailer) : void {
        $this->mailer = $mailer;
    }

    public function getFullName(): string {

        $this->firstname = $this->firstname ?? '';
        $this->surname = $this->surname ?? '';    
        //return $this->firstname . " " . $this->surname; // This is bug which send space hence fix this using trim
        return trim($this->firstname . " " . $this->surname);
    }

    public function notify($message) {
        return $this->mailer->sendMessage($this->email, $message);
    }
}
