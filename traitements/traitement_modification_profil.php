<?php
session_start();
include "../includes/config_db.php";

$nom = $_POST["nom"];
$prenoms = $_POST["prenoms"];
//$sexe = $_POST["sexe"];
$date_de_naissance = $_POST["date_de_naissance"];

$adresse_email = $_POST["email"];
$pseudo = $_SESSION["current_user_pseudo"];

//$mot_de_passe = $_POST["confirmation_mdp"];
$lieu_d_habitation = $_POST["lieu_d_habitation"];
$profession = $_POST["profession"];
$compte_facebook = $_POST["compte_facebook"];
$compte_instagram = $_POST["compte_instagram"];
$compte_twitter = $_POST["compte_twitter"];


$bio = addslashes($_POST["bio"]);
$raison = $_POST["raison"];


if (isset($_POST["soumettre"])) {
    if (is_uploaded_file($_FILES['photo_de_profil']['tmp_name'])) {
        if (!empty($_FILES['photo_de_profil']['name'])) {
            if ($_SESSION["current_user_photo_de_profil"] != $_FILES['photo_de_profil']['name']) {
                $photo_de_profil = "../uploads/pp_" . $pseudo . ".jpg";
                //on déplace le fichier dans le fichier
                if (unlink($photo_de_profil) and move_uploaded_file($_FILES['photo_de_profil']['tmp_name'], $photo_de_profil)) {
                } else {
                    //il y a eu une erreur
                    echo "<p>Erreur lors du déplacement du fichier $photo_de_profil</p>";
                }
            }
            
        } else {
            
        }

        
        
    } else {
        $photo_de_profil = $_SESSION["current_user_photo_de_profil"];
    }


    if (is_uploaded_file($_FILES['photo_de_couverture']['tmp_name'])) {
        if (!empty($_FILES['photo_de_couverture']['name'])) {
            if ($_SESSION["current_user_photo_de_couverture"] != $_FILES['photo_de_couverture']['name']) {
                $photo_de_couverture = "../uploads/pc_" . $pseudo . ".jpg";
                //on déplace le fichier dans le fichier
                if (unlink($photo_de_couverture) and move_uploaded_file($_FILES['photo_de_couverture']['tmp_name'], $photo_de_couverture) ) {
                } else {
                    //il y a eu une erreur
                    echo "<p>Erreur lors du déplacement du fichier $photo_de_couverture</p>";
                }
            }
            
        } else {
            
        }

        
        
    } else {
        $photo_de_couverture = $_SESSION["current_user_photo_de_couverture"];
    }
}

try {
    $request = "UPDATE users SET nom= '$nom', prenoms= '$prenoms', date_de_naissance= '$date_de_naissance', adresse_email= '$adresse_email',  photo_de_profil = '$photo_de_profil', photo_de_couverture= '$photo_de_couverture', bio = '$bio', raison= '$raison', profession= '$profession', lieu_habitation= '$lieu_d_habitation', compte_facebook= '$compte_facebook', compte_instagram= '$compte_instagram', compte_twitter= '$compte_twitter' WHERE `users`.`pseudo` = '$pseudo'" ;
    mysqli_query($chConnect, $request);
    echo $request;


    //$_SESSION["current_user_pseudo"]= $pseudo;
    $_SESSION["current_user_lastname"]= $nom;
    $_SESSION["current_user_firstname"]= $prenoms;
    //$_SESSION["current_user_sexe"]= $sexe;
    $_SESSION["current_user_date_de_naissance"]= $date_de_naissance;
    $_SESSION["current_user_adresse_email"]= $adresse_email;
    $_SESSION["current_user_photo_de_profil"]= $photo_de_profil;
    $_SESSION["current_user_photo_de_couverture"]= $photo_de_couverture;
    $_SESSION["current_user_bio"]= stripslashes($bio);
    $_SESSION["current_user_raison"]= $_SESSION["ref_raison"][$raison];
    //$_SESSION["current_user_hobbies"]= $hobbies;
    $_SESSION["current_user_profession"]= $profession;
    $_SESSION["current_user_lieu_habitation"]= $lieu_d_habitation;
    $_SESSION["current_user_compte_facebook"]= $compte_facebook;
    $_SESSION["current_user_compte_instagram"]= $compte_instagram;
    $_SESSION["current_user_compte_twitter"]= $compte_twitter;
    header("Location:../acc_user.php?page=my_profile");
} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}
?>