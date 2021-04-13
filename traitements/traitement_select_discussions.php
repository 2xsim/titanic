<?php
    session_start();
    include_once "../includes/config_db.php";
    $current_user_pseudo = $_SESSION["current_user_pseudo"];
    $request = "SELECT * FROM users WHERE NOT pseudo = '$current_user_pseudo' ";
    $resultat = mysqli_query($chConnect, $request);
    $output = "";
    if(mysqli_num_rows($resultat) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($resultat) > 0){
        include "../includes/liste_discussions.php";
    }
    echo $output;
?>