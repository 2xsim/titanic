<?php
    session_start();
    $_SESSION["ref_raison"] = array("1" => "Célibataire en quête d'amour.", "2" => "Recherche un cavalier pour une cérémonie.",
                             "3" => "Juste envie d'une aventure.", "4" => "Envie d'un date.", "5" => "Recherche un(e) ami(e) ou plus si affinités." );
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