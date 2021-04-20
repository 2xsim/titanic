<?php
session_start();
include "../includes/config_db.php";

$pseudo = $_SESSION["current_user_pseudo"];

$hobbies = implode(',', $_POST['hobbies']);
$lieu_d_habitation = $_POST["lieu_d_habitation"];
$profession = $_POST["profession"];
$compte_facebook = $_POST["facebook"];
$compte_instagram = $_POST["instagram"];
$compte_twitter = $_POST["twitter"];

try {
    $request = "UPDATE users SET hobbies = '$hobbies', profession= '$profession', lieu_habitation= '$lieu_d_habitation', compte_facebook= '$compte_facebook', compte_instagram= '$compte_instagram', compte_twitter= '$compte_twitter' WHERE `users`.`pseudo` = '$pseudo'" ;
    mysqli_query($chConnect, $request);
    echo $request;

    $_SESSION["current_user_hobbies"] = $hobbies ;
    $_SESSION["current_user_profession"] = $profession;
    $_SESSION["current_user_lieu_habitation"] = $lieu_d_habitation;
    $_SESSION["current_user_compte_facebook"] = $compte_facebook;
    $_SESSION["current_user_compte_instagram"] = $compte_instagram;
    $_SESSION["current_user_compte_twitter"] = $compte_twitter;
    header("Location:../acc_user.php");
} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}
?>