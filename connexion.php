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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
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
                            <hr>
                            <!-- Email input -->
                            <div class="row justify-content-center form-outline mb-4">
                                <label for="pseudo" class="inp">
                                    <input type="text" name="pseudo" id="pseudo" placeholder="&nbsp;" required />
                                    <span class="label">E-mail/Pseudo</span>
                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25"></path>
                                    </svg>
                                    <span class="input_border"></span>
                                </label>
                            </div>
                            <!-- Password input -->
                            <div class="row justify-content-center form-outline mb-4">
                                <label for="password" class="pass_inp">
                                    <input type="password" id="password" name="password" placeholder="Mot de passe"
                                        pattern=".{8,}" required>
                                    <svg width="280px" height="18px" viewBox="0 0 280 18" class="password_border">
                                        <path
                                            d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12">
                                        </path>
                                    </svg>
                                    <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                        <path d="M1 7 5.5 11 L13 1"></path>
                                    </svg>
                                </label>
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

                                </div>
                                <div id="texte_alternatif" class="col text-center text-danger">
                                    <p></p>
                                </div>
                            </div>
                            <hr>

                            <!-- Submit button -->
                            <div class="row justify-content-center">
                                <div class="text-center"><input class="btn btn-dark col-4" type="button"
                                        value="Se connecter" name="soumettre" id="connexion" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/bezier-easing@2.1.0/dist/bezier-easing.min.js'></script>
    <script src="./js/script.js"></script>

    <script>
    $(document).ready(function() {
        $("#connexion").click(function() {
            $("#texte_alternatif").html('');

            var pseudo = $("#pseudo").val();
            var password = $("#password").val();
            if (pseudo != "" & password != "") {
                $.ajax({
                    type: 'GET',
                    url: 'traitements/traitement_connexion.php',
                    data: "pseudo=" + encodeURIComponent(pseudo) + "&password=" +
                        encodeURIComponent(password),
                    success: function(resultat) {
                        if (resultat == "Authentification Success") {
                            //$("#texte_alternatif").append(resultat);
                            window.location.href = 'acc_user.php';
                        } else {
                            document.getElementById('texte_alternatif').innerHTML =
                                "Identifiants incorrects";
                        }
                    }
                })
            }
        });
    });
    </script>
</body>

</html>