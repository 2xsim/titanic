<?php 
    session_start();
    
    if (!isset($_SESSION["current_user_pseudo"])) {
        header('Location:connexion.php');
    }else {
        $current_user_pseudo = $_SESSION["current_user_pseudo"];
        $current_user_lastname =$_SESSION["current_user_lastname"];
        $current_user_firstname=$_SESSION["current_user_firstname"];
        $current_user_sexe = $_SESSION["current_user_sexe"];
        $current_user_date_de_naissance = $_SESSION["current_user_date_de_naissance"];
        $current_user_adresse_email = $_SESSION["current_user_adresse_email"];
        $current_user_photo_de_profil = $_SESSION["current_user_photo_de_profil"];
        $current_user_photo_de_couverture = $_SESSION["current_user_photo_de_couverture"];
        $current_user_bio = $_SESSION["current_user_bio"];
        $current_user_raison = $_SESSION["current_user_raison"];
    }
    ?>
    
    
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Accueil</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style_acc_user.css">
    <link rel="stylesheet" href="./css/style_chat.css">
    <link rel="stylesheet" href="./css/style_users.css">
    <link rel="stylesheet" href="./css/style_settings.css">
    <link rel="stylesheet" href="./css/style_user.css">
</head>

<body>
    <?php
    
        $_SESSION['page'] = "acc_user";
        include "includes/navbar.php";
    ?>
    <div id="resultat_recherche">

        <?php
            $page = $_GET['page'];
            include("./includes/$page.php");
        ?>
    </div>


    <!--Main Navigation-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#loupe").click(function() {
            //La touche Entrée a été appuyée
            var objet_research = $("#search_input").val();
            if (objet_research.trim() != "") {
                $.ajax({
                    type: 'GET',
                    url: 'traitements/traitement_research.php',
                    data: "objet_research=" + encodeURIComponent(objet_research),
                    success: function(resultat) {
                        if (resultat != "") {
                            window.location.href =
                                "acc_user.php?page=resultat_recherche&objet_research=" +
                                encodeURIComponent(objet_research);
                        } else {
                            document.getElementById('resultat_recherche').innerHTML =
                                "<p>Aucun résultat</p>";

                        }
                    }
                })
            }
        });
    });
    </script>
    <script>
    var page = "<?=$page?>"
    if (page == "my_profile" || page == "settings") {
        $("li > a").removeClass("active");
        $("#avatar").addClass("active")
    } else {
        $("li > a").removeClass("active");
        $("#" + page).addClass("active");
    }
    </script>


</body>

</html>