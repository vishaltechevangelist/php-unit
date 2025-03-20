<?php
namespace UnitTestingApp;

class User_MailerStaticMethod {
    public $email;
    private $mailer;

    public function __construct($email) {
        $this->email = $email;
    }

    public function setMailer($mailer) {
        $this->mailer = $mailer;
    }

    public function notify(string $message) : bool {
        //return $this->mailer::sendMessage($this->email, $message);
        return Mailer_StaticMethod::sendMessage($this->email, $message);
    }

}