<?php 
    session_start();
    if (!isset($_SESSION["current_user_pseudo"])) {
        header('Location:../connexion.php');
    }else {
        include "../includes/config_db.php";
        $outgoing_id = $_SESSION["current_user_pseudo"];
        $incoming_id = $_POST['incoming_id'];
        $message = trim($_POST['message']);
        $message = addslashes($message);
        $today = date("Y-m-d");
        $time = date("G:i");
        if(!empty($message)){
            $request = "INSERT INTO messagerie (pseudo_from, pseudo_to, corps_message, date, heure) VALUES ('$outgoing_id', '$incoming_id', '$message', '$today', '$time')";
            $sql = mysqli_query( $chConnect, $request);
        }
    }
?>