<?php
session_start();
include "../includes/config_db.php";

$pseudo = $_SESSION["current_user_pseudo"];

try {
    $request = "UPDATE users SET photo_de_couverture= '' WHERE `users`.`pseudo` = '$pseudo'" ;

    if (!empty($_SESSION["current_user_photo_de_couverture"])) {
        if (mysqli_query( $chConnect, $request)) {
            $photo_de_couverture = "../uploads/pc_" . $pseudo . ".jpg";
            //on supprime la pc dans le fichier
            unlink($photo_de_couverture);
            $_SESSION["current_user_photo_de_couverture"]= '';
            echo "Success";
        } else {
            echo "Failed";
        }
    }else {
        echo "Success";
    }

} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}
?>