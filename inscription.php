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

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-md-8">

                            <form class="bg-white rounded shadow-5-strong p-5">
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
                                                    <div class="row mb-4">
                                                        <div class="col">
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
                                                                <label class="form-label"
                                                                    for="form3Example2">Nom</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--  -->
                                                    <div class="row mb-4">
                                                        <div class="col-4">
                                                        </div>
                                                        <div class="col">
                                                            <div class="btn-group">
                                                                <input type="radio" class="btn-check" name="options"
                                                                    id="option2" autocomplete="off" />
                                                                <label class="btn btn-primary"
                                                                    for="option2">Homme</label>

                                                                <input type="radio" class="btn-check" name="options"
                                                                    id="option3" autocomplete="off" />
                                                                <label class="btn btn-primary"
                                                                    for="option3">Femme</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Date de naissance -->
                                                    <div class="row mb-4">
                                                        <div class="col-4">Date de naissance</div>
                                                        <div class="col">
                                                            <div class="form-outline">
                                                                <input type="date" id="form3Example3"
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-floating"
                                                            data-mdb-toggle="collapse"
                                                            data-mdb-target="#flush-collapseTwo"
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
                                                <form>

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="form3Example3" class="form-control" />
                                                        <label class="form-label" for="adresse_email">Email
                                                            address</label>
                                                    </div>

                                                    <!-- Pseudo input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" id="form1Example" class="form-control" />
                                                        <label class="form-label" for="pseudo">Nom
                                                            d'utilisateur</label>
                                                    </div>

                                                    <!-- Mot de passe input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form3Example4"
                                                            class="form-control" />
                                                        <label class="form-label" for="mot_de_passe">Mot de
                                                            passe</label>
                                                    </div>

                                                    <!-- Confirmation mot de passe input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form3Example5"
                                                            class="form-control" />
                                                        <label class="form-label" for="conf_mot_de_passe">Confirmation
                                                            du mot de passe</label>
                                                    </div>

                                                </form>

                                                <div class="text-center">
                                                    <button type="button" class="btn btn-floating"
                                                        data-mdb-toggle="collapse"
                                                        data-mdb-target="#flush-collapseThree"
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
                                            aria-labelledby="flush-headingThree"
                                            data-mdb-parent="#accordionFlushExample">
                                            <div class="accordion-body">

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
    </header>
    <!--Main Navigation-->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>