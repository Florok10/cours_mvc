<?php 

class User {
    private $_nom;
    private $_prenom;
    private $_age;
    private $_email;

    public function __construct($_nom) {
        echo $_nom . " ";
    }
}

$valentin = new User('Valentin');
$mourad = new User('Mourad');
$omar = new User('Omar');
$steven = new User('Steven');
$dany = new User('Dany');
$emilie = new User('Emilie');
$mickael = new User('Mickael');
$baptiste = new User('Baptiste');
$marjorie = new User('Marjorie');
