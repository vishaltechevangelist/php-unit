<?php
namespace UnitTestingApp;

class Mailer {
    public function sendMessage($email, $message) {
        sleep(3);
        echo "$message is send to $email";
    }
}