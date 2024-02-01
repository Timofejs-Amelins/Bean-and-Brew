<?php
class Customer {
    // person attributes, all private for security
    private $firstname;
    private $lastname;
    private $age;
    private $gender;
    private $password;
    private $dateofbirth;

    // this will be run when a Person is created, requries these atttributes
    function __construct($firstname, $lastname, $age, $gender, $password, $dateofbirth) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->gender = $gender;
        $this->password = $password;
        $this->dateofbirth = $dateofbirth;
    }

    // use cases

    // user logs in
    private static function login($firstname, $password) {
        // data would have been inputted already, time to process and output

    }
}
