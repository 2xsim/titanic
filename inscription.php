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

                        <form class="bg-white rounded shadow-5-strong p-5" onSubmit="return checkPassword(this)">
                            <h3 class="card-title">Paré à l'abordage ?</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Des milliers de célibataires vous attendent
                            </h6>
                            <br>
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
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Example1"
                                                                class="form-control" />
                                                            <label class="form-label"
                                                                for="form3Example1">Prénom(s)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Example2"
                                                                class="form-control" />
                                                            <label class="form-label" for="form3Example2">Nom</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <div class="row d-flex justify-content-center align-items-center mb-4">
                                                    <div class="col-4"> Je suis un/une :
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="btn-group">
                                                            <input type="radio" class="btn-check" name="options"
                                                                id="option2" autocomplete="off" />
                                                            <label class="btn btn-dark" for="option2">Homme</label>

                                                            <input type="radio" class="btn-check" name="options"
                                                                id="option3" autocomplete="off" />
                                                            <label class="btn btn-dark" for="option3">Femme</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Date de naissance -->
                                                <div
                                                    class="row mb-4 d-flex justify-content-center align-items-center text-center">
                                                    <div class="col-5">Date de naissance : </div>
                                                    <div class="col-5">
                                                        <div class="form-outline">
                                                            <input type="date" id="form3Example3"
                                                                class="form-control" />
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
                                                <input type="email" id="form3Example3" class="form-control" />
                                                <label class="form-label" for="adresse_email">Adresse
                                                    e-mail</label>
                                            </div>

                                            <!-- Pseudo input -->
                                            <div class="form-outline col-4 offset-md-4 mb-4">
                                                <input type="text" id="form1Example" class="form-control" />
                                                <label class="form-label" for="pseudo">Nom
                                                    d'utilisateur</label>
                                            </div>

                                            <!-- Mot de passe input -->
                                            <div class="form-outline col-6 offset-md-3 mb-4">
                                                <div class="form__field">
                                                    <input type="password" class="form__input"
                                                        placeholder="Mot de passe" id="mot_de_passe" name="mot_de_passe"
                                                        pattern=".{6,}" required>
                                                    <span class="icon"></span>
                                                </div>
                                                <p id="texte_indication">Le mot de passe doit contenir au moins 6
                                                    caractères</p>
                                            </div>

                                            <!-- Confirmation mot de passe input -->
                                            <div class="form-outline col-7 offset-md-3 mb-4">
                                                <input type="password" id="form3Example5" class="form-control"
                                                    id="conf_mot_de_passe" name="conf_mot_de_passe" required />
                                                <label class="form-label" for="conf_mot_de_passe">Confirmation
                                                    du mot de passe</label>
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

                                                <div class="col"><label class="form-label" for="customFile">Photo de
                                                        profil</label>
                                                    <input type="file" class="form-control" id="customFile" />
                                                </div>
                                                <div class="col"><label class="form-label" for="customFile">Photo de
                                                        couverture</label>
                                                    <input type="file" class="form-control" id="customFile" />
                                                </div>

                                            </div>
                                            <div class="mb-4"><select class="form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Raison</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="row justify-content-center mb-4">
                                                <div class="text-center"><input class="btn btn-dark col-3" type="submit"
                                                        value="S'inscrire" id="suivant_infoPerso" />
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
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


</body>

</html>