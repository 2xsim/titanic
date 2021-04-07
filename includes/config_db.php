<?php
    
    $server = "localhost";
    $dbname = "titanic";
    $dbuser = "root";
    $dbpassword = "root";

    try {
        $chConnect = mysqli_connect($server, $dbuser, $dbpassword) ;
        mysqli_query($chConnect, 'USE '.$dbname.';') or exit(mysqli_error($chConnect)) ;
        $_SESSION["chConnect"] = $chConnect;
    } catch (Exception $e) {
        echo("Impossible de traiter les données. Erreur : ".$e->getMessage());
    }

?>