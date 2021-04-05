<?php

    $server = "localhost";
    $dbname = "titanic";
    $dbuser = "root";
    $dbpassword = "";

    $prenoms = $_POST["prenoms"];
    $nom = $_POST["nom"];
    $sexe = $_POST["sexe"];
    $date_de_naissance = $_POST["date_de_naissance"];

    $adresse_email = $_POST["adresse_email"];
    $pseudo = $_POST["pseudo"];
    $mot_de_passe = $_POST["mot_de_passe"];
    
    if (!empty($_FILES["photo_de_profil"])) {
        # code...
        $photo_de_profil = "'../uploads/".$_FILES["photo_de_profil"]["name"]."'";
    } else {
        # code...
        $photo_de_profil = "NULL";
    }
    
    if (!empty($_FILES["photo_de_couverture"])) {
        # code...
        $photo_de_couverture = "'../uploads/".$_FILES["photo_de_couverture"]["name"]."'";
    } else {
        # code...
        $photo_de_couverture = "NULL";
    }
    
    
    
    $bio = $_POST["bio"];
    $raison = $_POST["raison"];
    
    if(is_uploaded_file($_FILES['photo_de_profil']['tmp_name'])){
        
        //on déplace le fichier dans le repertoire
        if(move_uploaded_file($_FILES['photo_de_profil']['tmp_name'],$photo_de_profil)){
            }
        else{
        //il y a eu une erreur
        echo "<p>Erreur lors du déplacement du fichier $photo_de_profil</p>" ;
            }
        }
    else{
        echo "<p>Aucun fichier séléctionné</p>" ;
    }

    if (isset($_POST["soumettre"])) {
        # code...
        if(is_uploaded_file($_FILES['photo_de_couverture']['tmp_name'])){
        
        //on déplace le fichier dans le repertoire
        if(move_uploaded_file($_FILES['photo_de_couverture']['tmp_name'],$photo_de_couverture)){
            }
        else{
        //il y a eu une erreur
        echo "<p>Erreur lors du déplacement du fichier $photo_de_couverture</p>" ;
            }
        }
    else{
        echo "<p>Aucun fichier séléctionné</p>" ;
    }
    }


    try {
        $chConnect = mysqli_connect($server, $dbuser, $dbpassword) ;
        mysqli_query($chConnect, 'USE '.$dbname.';') or exit(mysqli_error($chConnect)) ;
        mysqli_query($chConnect, "INSERT INTO users (pseudo, nom, prenoms, sexe, date_de_naissance, adresse_email, mot_de_passe, photo_de_profil, photo_de_couverture, bio, raison) VALUES ('$pseudo', '$nom', '$prenoms', '$sexe', '$date_de_naissance', '$adresse_email', '$mot_de_passe', '$photo_de_profil', '$photo_de_couverture', '$bio', '$raison')" ) ;
        echo("INSERT INTO users (pseudo, nom, prenoms, sexe, date_de_naissance, adresse_email, mot_de_passe, bio, raison) VALUES ('$pseudo', '$nom', '$prenoms', '$sexe', '$date_de_naissance', '$adresse_email', '$mot_de_passe', '$photo_de_profil', '$photo_de_couverture', '$bio', '$raison')");
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }
    ?>