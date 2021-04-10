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
            $request = "SELECT * FROM users WHERE adresse_email = '$pseudo';" ;
        } else {
            $request = "SELECT * FROM users WHERE pseudo = '$pseudo';" ;
        }
        
        $result = mysqli_query( $chConnect, $request) ;
        $row = mysqli_fetch_assoc($result);
        $userpassword = $row["mot_de_passe"];

        if ($userpassword == $password_saisi) {
            $_SESSION["current_user_pseudo"]= $row["pseudo"];
            $_SESSION["current_user_lastname"]= $row["nom"];
            $_SESSION["current_user_firstname"]= $row["prenoms"];
            $_SESSION["current_user_sexe"]= $row["sexe"];
            $_SESSION["current_user_date_de_naissance"]= $row["date_de_naissance"];
            $_SESSION["current_user_adresse_email"]= $row["adresse_email"];
            $_SESSION["current_user_photo_de_profil"]= $row["photo_de_profil"];
            $_SESSION["current_user_photo_de_couverture"]= $row["photo_de_couverture"];
            $_SESSION["current_user_bio"]= stripslashes($row["bio"]);
            $_SESSION["current_user_raison"]= $_SESSION["ref_raison"][$row["raison"]];
            echo "Authentification Success";
        } else {
            echo "Connexion impossible";
        }
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }

    
    
?>