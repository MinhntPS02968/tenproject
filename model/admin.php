<?php
class Admin {
    public function __construct() {
        ;
    }
    
    public function Login($email, $password){
        $db = new connect();
        return $db->getInstance("select * from admin where email = '$email' AND password = '$password'");

        
    }
}
