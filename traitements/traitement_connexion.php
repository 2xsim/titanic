<?php

    session_start();

    include "../includes/config_db.php";
    
    if (isset($_GET["pseudo"]) and isset($_GET["password"])) {
        $pseudo = (String) $_GET["pseudo"];
        $password_saisi = (String) $_GET["password"];
        # code...
    }
    $chConnect = $_SESSION["chConnect"];
    
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
            echo "Authentification Success";
        } else {
            echo "Connexion impossible";
        }
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }

    
    
?>