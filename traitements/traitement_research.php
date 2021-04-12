<?php
session_start();
include "../includes/config_db.php";

if (isset($_GET["objet_research"])) {
    $objet_research = (String) trim($_GET["objet_research"]);
    # code...
}

try {
    $current_user_pseudo = $_SESSION["current_user_pseudo"];
    $request = "SELECT * FROM users WHERE pseudo <> '$current_user_pseudo' AND ( pseudo LIKE '$objet_research%' OR nom LIKE '$objet_research%' OR prenoms LIKE '$objet_research%') LIMIT 10;" ;
    $result = mysqli_query( $chConnect, $request) ;
    $result = $result->fetch_all();

    if (!empty($result)) {
        echo("Find");
    }

} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}


?>