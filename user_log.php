<?php

require_once ("pdo.php");
if(isset($_POST["submit"])){
    if(empty($_POST["mail"] && !empty($_POST["mdp"] )){

        $mail= $_POST["mail"];
        $mail= filter_var($mail, FILTER_VALIDATE_EMAIL);

        $mdp = $_POST["mdp"];
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);

        try{
            $dbh = new PDO($dsn,$user,$password);

            $query="SELECT * FROM user WHERE user.email = :email AND user.password = :mdp";

            $sth= $dbh->prepare($query);
            $sth->bindParam(':email',$mail);
            $sth->bindParam(':mdp', $mdp);

            $sth->execute();

            $count = $sth->rowCount();
            $items = $sth-fetch(PDO::F);

            if(!empty($items)){
               
            }
        }catch(PDOException $e){

        }
    }}
    ?>
