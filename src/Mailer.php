<?php
namespace UnitTestingApp;

use Exception;

class Mailer {
    public function sendMessage($email, $message) {
        if (empty($email)) {
            throw new Exception("Email is blank");
        }
        sleep(3);
        echo "$message is send to $email";
        return true;
    }
}