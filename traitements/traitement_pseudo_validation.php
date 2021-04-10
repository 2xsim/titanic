<?php
include "../includes/config_db.php";

if (isset($_GET["objet_research"])) {
$objet_research = (String) trim($_GET["objet_research"]);
    # code...
}

try {
    $request = "SELECT pseudo FROM users WHERE  pseudo = '$objet_research' "; ;
    $result = mysqli_query( $chConnect, $request) ;
} catch (Exception $e) {
    echo ("Impossible de traiter les données. Erreur : " . $e->getMessage());
}

$result = $result->fetch_all();

foreach($result as $row){
    ?>
<ul>
    <li><?= $row[0] ?></li>
</ul>
<?php
}

?>