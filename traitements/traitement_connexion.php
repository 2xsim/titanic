<?php

    session_start();

    include "includes/config_db.php";
    
    $chConnect = $_SESSION["chConnect"];
    $pseudo = $_POST["pseudo"];
    $password_saisi = $_POST["password"];
    
    try {
        if (stripos($pseudo, '@')) {
            $request = "SELECT nom, prenoms, mot_de_passe FROM users WHERE adresse_email = '$pseudo';" ;
        } else {
            $request = "SELECT nom, prenoms, mot_de_passe FROM users WHERE pseudo = '$pseudo';" ;
        }
        
        $result = mysqli_query( $chConnect, $request) ;
        $row = mysqli_fetch_assoc($result);
        $userpassword = $row["mot_de_passe"];

        if ($userpassword == $password_saisi) {
            $_SESSION["user_lastname"]= $row["nom"];
            $_SESSION["user_firstname"]= $row["prenoms"];
            echo "Connexion établie";
        } else {
            echo $request;
            echo "Connexion impossible";
        }
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }

    
    
?>