<?php

if (isset( $_POST['submit'] ) ) {
  $nom = $_POST['nom']; 
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $passwordUser = $_POST['passwordUser'];
}



try {
  $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
  $preparation_requete = $bdd->prepare("INSERT INTO user (nom, prenom, mail, date_anniv, photo, password_user, cgu)
   VALUES (:nom, :prenom, :mail, :photo, :date_anniv, :password_ser, :cgu)");
}
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

  $preparation_requete -> bindParam(':nom', $nom);
  $preparation_requete -> bindParam(':prenom', $prenom);
  $preparation_requete -> bindParam(':mail', $mail);
  $preparation_requete -> bindParam(':photo', $photo);
  $preparation_requete -> bindParam(':date_anniv', $date_anniv);
  $preparation_requete -> bindParam(':password_user', $password_user);
  $preparation_requete -> bindParam(':cgu', $cgu);

  $preparation_requete -> execute();

/*if("submit") { echo 'Nous avons bien reçu votre formluaire'; */
?>