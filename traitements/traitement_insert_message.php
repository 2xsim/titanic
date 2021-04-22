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
        if(!empty($message)){
            $request = "INSERT INTO messagerie (pseudo_from, pseudo_to, corps_message) VALUES ('$outgoing_id', '$incoming_id', '$message')";
            $sql = mysqli_query( $chConnect, $request);
        }
    }
?>