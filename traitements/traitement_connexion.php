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
            $current_user_pseudo = $row["pseudo"];
            $request = "UPDATE users SET statut= '1' WHERE `users`.`pseudo` = '$current_user_pseudo';" ;
            mysqli_query( $chConnect, $request);
            
            $_SESSION["current_user_pseudo"]= $row["pseudo"];
            $_SESSION["current_user_lastname"]= $row["nom"];
            $_SESSION["current_user_firstname"]= $row["prenoms"];
            $_SESSION["current_user_sexe"]= $row["sexe"];
            $_SESSION["current_user_date_de_naissance"]= $row["date_de_naissance"];
            $_SESSION["current_user_adresse_email"]= $row["adresse_email"];
            $_SESSION["current_user_mot_de_passe"]= $row["mot_de_passe"];
            $_SESSION["current_user_photo_de_profil"]= $row["photo_de_profil"];
            $_SESSION["current_user_photo_de_couverture"]= $row["photo_de_couverture"];
            $_SESSION["current_user_bio"]= stripslashes($row["bio"]);
            $_SESSION["current_user_raison"]= $_SESSION["ref_raison"][$row["raison"]];
            $_SESSION["current_user_hobbies"]= $row["hobbies"];
            $_SESSION["current_user_profession"]= $row["profession"];
            $_SESSION["current_user_lieu_habitation"]= $row["lieu_habitation"];
            $_SESSION["current_user_compte_facebook"]= $row["compte_facebook"];
            $_SESSION["current_user_compte_instagram"]= $row["compte_instagram"];
            $_SESSION["current_user_compte_twitter"]= $row["compte_twitter"];
            $_SESSION["current_user_statut"]= "1";
            echo "Authentification Success";
        } else {
            echo "Connexion impossible";
        }
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }

    
    
?>