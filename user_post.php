<?php
require_once ("pdo.php");
if(isset($_POST["submit"])){
    if(!empty($_POST["nom"] && !empty($_POST["prenom"] && !empty($_POST["mail"] && !empty($_POST["mdp"] && !empty($_POST["age"])){


        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $age = $_POST["age"];

        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        
        try{
            $dbh = new PDO($dsn,$user,$password);

            $query = "INSERT INTO user(nom,prenom,mail,mdp,age) VALUES (:nom, :prenom, :mail, :mdp, :age)";

            $sth= $dbh->prepare($query);

            $sth->bindParam(":nom", $nom);
            $sth->bindParam(":prenom", $prenom);
            $sth->bindParam(":mail", $mail);
            $sth->bindParam(":mdp", $mdp);
            $sth->bindParam(":age", $age);

            $sth->execute();

            header("Location: users.php");
            exit();

        }
        catch(PDOException $e){
            echo 'cheh';
                die($e->getMessage());

        }

    }
}
?>