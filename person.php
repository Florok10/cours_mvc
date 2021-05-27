<?php 

class User {
    var $_nom;
    private $_prenom;
    private $_age;
    private $_email;
    private $_passwordUser

    public function __construct($nom, $prenom, $age, $email, $passwordUser) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        $this->_email = $mail;
        $this->_passwordUser = $passwordUser;
    }

    public function SetNom($nom) {
        $this->_nom = $nom;
    }
    public function SetPrenom($prenom) {
        $this->_prenom = $prenom;
    }
    public function SetAge($age) {
        $this->_age = $age;
    }
    public function SetMail($mail) {
        $this->_mail = $mail;
    }
    public function SetPassword_user($password_user) {
        $this->_password_user = $password_user;
    }
}

$valentin = new User('Fekrach', 'Valentin', 22, 'vf59165@hotmail.com', 'a1b2c3');

var_dump($valentin->$nom->$prenom->$age->$email->$passwordUser);

