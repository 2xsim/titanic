<?php
session_start();
include "../includes/config_db.php";

if (isset($_GET["nouveau_mdp"])) {
    $nouveau_mdp = (String) $_GET["nouveau_mdp"];
}

try {
    $current_user_pseudo = $_SESSION["current_user_pseudo"];
    $request = "UPDATE users SET mot_de_passe= '$nouveau_mdp' WHERE `users`.`pseudo` = '$current_user_pseudo';" ;
    if (mysqli_query( $chConnect, $request)) {
        $_SESSION["current_user_mot_de_passe"]= $nouveau_mdp;
        echo "Success";
    }else {
        echo "Failed";
    } 
    
} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}


?>