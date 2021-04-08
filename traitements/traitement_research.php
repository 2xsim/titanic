<?php
include "../includes/config_db.php";

if (isset($_GET["objet_research"])) {
$objet_research = (String) trim($_GET["objet_research"]);
    # code...
}

try {
    $request = "SELECT pseudo, nom, prenoms, sexe, date_de_naissance, photo_de_profil FROM users WHERE ( pseudo LIKE '$objet_research%' OR nom LIKE '$objet_research%' OR prenoms LIKE '$objet_research%') LIMIT 10"; ;
    $result = mysqli_query( $chConnect, $request) ;
} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}

$result = $result->fetch_all();

foreach($result as $row){
    ?>
        <ul>
            <li><?= $row[0] ?></li>
            <li><?= $row[1] ?></li>
            <li><?= $row[2] ?></li>
            <li><?= $row[3] ?></li>
            <li><?= $row[4] ?></li>
            <li><?= $row[5] ?></li>
        </ul>
    <?php
}

?>