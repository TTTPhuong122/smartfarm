<?php

class User{
    private $email;
    private $password;
    private $gender;
    private $phone;
    private $address;

    public function __construct($email, $password, $gender, $phone, $address){
        $this->$email=$email;
        $this->$password=$password;
        $this->$gender=$gender;
        $this->$phone=$phone;
        $this->$address=$address;
    }
    public function __construct();

    

}

?>