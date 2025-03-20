<?php
namespace UnitTestingApp;

use Exception;

class Mailer_StaticMethod {
    public static function sendMessage($email, $message) : bool {
        if (empty($email)) {
            throw new Exception('Email is empty');  
        }
        
        echo "Send $message to $email";
        return true;
    }
}