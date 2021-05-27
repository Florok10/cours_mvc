<?php 

class User {
    public $_nom;
    private $_prenom;
    private $_age;
    private $_email;
}

$user1 = new User;
echo $user1->nom;
