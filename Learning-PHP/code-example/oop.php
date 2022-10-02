<?php
echo 'OOP';
class User {
    public $name;
    public $email;
    public $age;
    public $password;

    function __construct ($name,
                          $email,
                          $age,
                          $password) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    } 
}

$user1 = new User('thinh', 'thinhlam749@gmail.com', 18, 123);
// $user1->UserData();

// echo $user1;
print_r($user1);