<?php
namespace UnitTestingApp;

class User_MailerStaticMethod {
    public $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function notify(string $message) : bool {
        return Mailer_StaticMethod::sendMessage($this->email, $message);
    }

}