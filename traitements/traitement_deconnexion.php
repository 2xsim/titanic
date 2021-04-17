<?php
session_start();
if (isset($_SESSION["current_user_pseudo"])) {
    session_unset();
    session_destroy();
}
header("location: ../connexion.php");
?>