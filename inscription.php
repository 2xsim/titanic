<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Titanic - Inscription</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.css">
    <link rel="stylesheet" href="./css/style_header.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <?php
        $_SESSION['page'] = "inscription";
        include "includes/navbar.php";
        ?>
    </header>
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-8">

                        <form class="bg-white rounded shadow-5-strong p-5 mt-5" onSubmit="return checkPassword(this)"
                            action="traitements/traitement_inscription.php" enctype="multipart/form-data" method="post">
                            <h3 class="card-title">Paré à l'abordage ?</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Des milliers de célibataires vous attendent
                            </h6>
                            <hr>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                            data-mdb-target="#flush-collapseOne" aria-expanded="true"
                                            aria-controls="flush-collapseOne">
                                            Informations personnelles
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <form>
                                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                                <div class="row mb-4 d-flex justify-content-center">
                                                    <div class="col-6">
                                                        <label for="prenoms" class="inp">
                                                            <input type="text" name="prenoms" id="prenoms"
                                                                placeholder="&nbsp;" required />
                                                            <span class="label">Prénom(s)</span>
                                                            <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                                <path
                                                                    d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                                </path>
                                                            </svg>
                                                            <span class="input_border"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="nom" class="inp">
                                                            <input type="text" name="nom" id="nom"
                                                                placeholder="&nbsp;" />
                                                            <span class="label">Nom</span>
                                                            <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                                <path
                                                                    d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                                </path>
                                                            </svg>
                                                            <span class="input_border"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <div class="row d-flex justify-content-center align-items-center mb-4">
                                                    <div class="col-4"> Je suis un/une :
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="btn-group">
                                                            <input type="radio" class="btn-check" name="sexe"
                                                                id="sexe_M" autocomplete="off" value="M" />
                                                            <label class="btn btn-dark" for="sexe_M">Homme</label>

                                                            <input type="radio" class="btn-check" name="sexe"
                                                                id="sexe_F" autocomplete="off" value="F" />
                                                            <label class="btn btn-dark" for="sexe_F">Femme</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Date de naissance -->
                                                <div
                                                    class="row mb-4 d-flex justify-content-center align-items-center text-center">
                                                    <div class="col-5">Date de naissance : </div>
                                                    <div class="col-5">
                                                        <div class="form-outline">
                                                            <input type="date" id="date_de_naissance" max='2003-04-01'
                                                                class="form-control" name="date_de_naissance"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="button" class="btn btn-floating"
                                                        data-mdb-toggle="collapse" data-mdb-target="#flush-collapseTwo"
                                                        aria-controls="flush-collapseTwo">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-mdb-toggle="collapse" data-mdb-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Informations de connexion
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <!-- Email input -->
                                            <div class="form-outline col-6 offset-md-3 mb-4">
                                                <label for="adresse_email" class="inp">
                                                    <input type="text" name="adresse_email" id="adresse_email"
                                                        pattern="(\w\.?)+@[\w\.-]+\.\w{2,4}" placeholder="&nbsp;" />
                                                    <span class="label">Adresse e-mail</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>

                                            <!-- Pseudo input -->
                                            <div class="form-outline col-4 offset-md-4 mb-4">
                                                <label for="pseudo" class="inp">
                                                    <input type="text" name="pseudo" id="pseudo"
                                                        pattern="[a-zA-Z0-9-_]{4, 24}" placeholder="&nbsp;" />
                                                    <span class="label">Pseudo</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                            <div id="texte_alternatif">
                                            </div>
                                            <!-- Mot de passe input -->
                                            <div class="form-outline text-center mb-4">
                                                <label for="mot_de_passe" class="pass_inp">
                                                    <input type="password" id="mot_de_passe" name="mot_de_passe"
                                                        placeholder="Mot de passe" pattern=".{8,}" required>
                                                    <svg width="280px" height="18px" viewBox="0 0 280 18"
                                                        class="password_border">
                                                        <path
                                                            d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12">
                                                        </path>
                                                    </svg>
                                                    <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                                        <path d="M1 7 5.5 11 L13 1"></path>
                                                    </svg>
                                                </label>
                                            </div>

                                            <!-- Confirmation mot de passe input -->
                                            <div class="form-outline text-center mb-4">
                                                <label for="conf_mot_de_passe" class="pass_inp">
                                                    <input type="password" id="conf_mot_de_passe"
                                                        name="conf_mot_de_passe"
                                                        placeholder="Confirmation du mot de passe" pattern=".{8,}"
                                                        required>
                                                    <svg width="280px" height="18px" viewBox="0 0 280 18"
                                                        class="password_border">
                                                        <path
                                                            d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12">
                                                        </path>
                                                    </svg>
                                                    <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                                                        <path d="M1 7 5.5 11 L13 1"></path>
                                                    </svg>
                                                </label>
                                            </div>


                                            <div class="text-center">
                                                <button type="button" class="btn btn-floating"
                                                    data-mdb-toggle="collapse" data-mdb-target="#flush-collapseThree"
                                                    aria-controls="flush-collapseThree">
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-mdb-toggle="collapse" data-mdb-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Personnalisation du profil
                                        </button>
                                    </h2>


                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row mb-4">

                                                <div class="col"><label class="form-label" for="photo_de_profil">Photo
                                                        de
                                                        profil</label>
                                                    <input type="file" class="form-control" id="photo_de_profil"
                                                        accept="image/*" name="photo_de_profil" />
                                                </div>
                                                <div class="col"><label class="form-label"
                                                        for="photo_de_couverture">Photo de
                                                        couverture</label>
                                                    <input type="file" class="form-control" id="photo_de_couverture"
                                                        accept="image/*" name="photo_de_couverture" />
                                                </div>

                                            </div>
                                            <div class="form-outline mb-4">
                                                <textarea class="form-control" id="bio" rows="4" name="bio"></textarea>
                                                <label class="form-label" for="bio">Bio</label>
                                            </div>
                                            <div class="text-center mb-4">
                                                <label class="select" for="slct">
                                                    <select id="slct" name="raison" required="required">
                                                        <option value="" disabled="disabled" selected="selected">
                                                            Raison
                                                        </option>
                                                        <option value="1">Relation sérieuse</option>
                                                        <option value="2">Coup d'un soir</option>
                                                        <option value="3">Se faire de nouvelles connaissances</option>
                                                        <option value="#">Four</option>
                                                        <option value="#">Five</option>
                                                        <option value="#">Six</option>
                                                        <option value="#">Seven</option>
                                                    </select>
                                                    <svg>
                                                        <use xlink:href="#select-arrow-down"></use>
                                                    </svg>
                                                </label>
                                                <!-- SVG Sprites-->
                                                <svg class="sprites">
                                                    <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                                        <polyline points="1 1 5 5 9 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </div>

                                            <hr>

                                            <div class="row justify-content-center">
                                                <div class="text-center"><input class="btn btn-dark col-3" type="submit"
                                                        value="S'inscrire" id="suivant_infoPerso" name="soumettre" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <script>
    function checkPassword(form) {
        mot_de_passe = form.mot_de_passe.value;
        conf_mot_de_passe = form.conf_mot_de_passe.value;

        // If Not same return False.    
        if (mot_de_passe != conf_mot_de_passe) {
            form.conf_mot_de_passe.setCustomValidity("Mot de passe incohérent !!");
            return false;
        }

        // If same return True.
        else {
            return true;
        }
    }
    </script>

    <script>
    $(document).ready(function() {
        $("#pseudo").keyup(function() {
            //$("#texte_alternatif").html('HHT');

            var pseudo_research = $(this).val();
            if (pseudo_research.trim() != "") {
                $.ajax({
                    type: 'GET',
                    url: 'traitements/traitement_pseudo_validation.php',
                    data: "objet_research=" + encodeURIComponent(pseudo_research),
                    success: function(resultat) {
                        if (resultat != "") {
                            document.getElementById('texte_alternatif').innerHTML =
                                "<p>pseudo invalide</p>";
                        } else {
                            document.getElementById('texte_alternatif').innerHTML =
                                "<p>pseudo valide</p>";
                        }
                    }
                })
            }
        });
    });
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.js"></script>

</body>

</html>