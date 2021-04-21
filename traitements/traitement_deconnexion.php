<?php
session_start();
if (isset($_SESSION["current_user_pseudo"])) {
    include "../includes/config_db.php";
    try {
        $current_user_pseudo = $_SESSION["current_user_pseudo"];
        $request = "UPDATE users SET statut= '0' WHERE `users`.`pseudo` = '$current_user_pseudo';" ;
        mysqli_query( $chConnect, $request);
    } catch (Exception $e) {
        echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
    }
    session_unset();
    session_destroy();
}
header("location: ../connexion.php");
?>