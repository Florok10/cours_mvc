<?php

if (isset( $_POST['submit'] ) ) {
  $nom = $_POST['nom']; 
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $passwordUser = $_POST['passwordUser'];
}



try {
  $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', '', 'root');
  $preparation_requete = $bdd->prepare("INSERT INTO user (nom, prenom, age, email, passwordUser)
   VALUES (:nom, :prenom, :age, :email, :passwordUser)");
}
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

  $preparation_requete -> bindParam(':nom', $nom);
  $preparation_requete -> bindParam(':prenom', $prenom);
  $preparation_requete -> bindParam(':age', $age);
  $preparation_requete -> bindParam(':email', $email);
  $preparation_requete -> bindParam(':passwordUser', $passwordUser);

  $preparation_requete -> execute();

if("submit") { echo 'Nous avons bien reçu votre formluaire'; 
?>