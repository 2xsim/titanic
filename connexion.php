<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Titanic - Connexion</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style_header.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Main Navigation-->
    <header>

        <?php 
                $_SESSION['page'] = "connexion";
                include "includes/navbar.php";
            ?>
    </header>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form class="bg-white rounded shadow-5-strong p-5">
                            <h3 class="card-title">Dépêchez-vous !</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Vous avez raté tellement de choses</h6>
                            <br>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="pseudo" id="pseudo"/>
                                <label class="form-label" for="pseudo">e-mail/ pseudo</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" class="form-control"  name="password" id="password"/>
                                <label class="form-label" for="password">Mot de passe</label>
                            </div>
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                            checked />
                                        <label class="form-check-label" for="form1Example3">
                                            Se souvenir
                                        </label>
                                    </div>
                                    <div id="texte_alternatif">

                                    </div>
                                </div>

                                <div class="col text-center">
                                    <!-- Simple link -->
                                    <a href="#!">Mot de passe oublié ?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="row justify-content-center">
                                <div class="text-center"><input class="btn btn-dark col-4" type="button"
                                        value="Se connecter" name="soumettre" id="connexion"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
    <!--Main Navigation-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#connexion").click(function() {
                $("#texte_alternatif").html('');

                var pseudo = $("#pseudo").val();
                var password = $("#password").val();
                if (pseudo != "" & password!="") {
                    $.ajax({
                        type: 'GET',
                        url: 'traitements/traitement_connexion.php',
                        data: "pseudo=" + encodeURIComponent(pseudo) + "&password=" + encodeURIComponent(password),
                        success: function(resultat) {
                            if (resultat == "Authentification Success") {
                                //$("#texte_alternatif").append(resultat);
                                window.location.href = 'acc_user.php';
                            } else {
                                document.getElementById('texte_alternatif').innerHTML = "Identifiants incorrects";
                            }
                        }
                    })
                }
            });
        });
    </script>
</body>

</html>