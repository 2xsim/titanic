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
    <title>Bienvenue à bord du bateau</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="./css/style_acc_user.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_new_user.css">
</head>

<body>

    <?php
    
    $_SESSION['page'] = "new_user";
    include "includes/navbar.php";
    ?>

    <!-- partial:index.partial.html -->
    <!--Hey! This is the original version
of Simple CSS Waves-->

    <div class="header">
        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <div class="animated-title text-start">
                <div class="text-top">
                    <div>
                        <span>Bienvenue</span>
                        <span><?= $current_user_firstname." ".$current_user_lastname?></span>
                    </div>
                </div>
                <div class="text-bottom">
                    <div>Vous y êtes presque</div>
                </div>
            </div>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex">
        <!-- Button to Open the Modal -->
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-dark-moon btn-rounded" data-toggle="modal"
                data-target="#config_modal">
                Configurer mon profil
            </button>
        </div>

        <form action="" method="post">
            <!-- The Modal -->
            <div class="modal fade" id="config_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center ps-2">
                                <h5 class="modal-title">Configuration de profil</h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <div id="smartwizard">
                                <ul class="nav mb-3">
                                    <li>
                                        <a class="nav-link" href="#step-1">
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#step-2">
                                            Compléments d'informations personnelles
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#step-3">
                                            Hobbies
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#step-4">
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="step-1" class="tab-pane" role="tabpanel">

                                    </div>
                                    <div id="step-2" class="tab-pane" role="tabpanel">
                                        <div class="row p-4">
                                            <div class="col-md-6">
                                                <label for="lieu_d_habitation" class="inp">
                                                    <input type="text" name="lieu_d_habitation" id="lieu_d_habitation"
                                                        placeholder="&nbsp;" />
                                                    <span class="label">Lieu d'habitation</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="profession" class="inp">
                                                    <input type="text" name="profession" id="profession"
                                                        placeholder="&nbsp;" />
                                                    <span class="label">Profession</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-3" class="tab-pane" role="tabpanel">
                                        <div class="p-4">
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="sport" value="sport">
                                                <label for="sport" class="text-dark ps-2">Sport</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="cuisine" value="cuisine">
                                                <label for="cuisine" class="text-dark ps-2">Cuisine</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="couture" value="couture">
                                                <label for="couture" class="text-dark ps-2">Couture</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="jeux_video"
                                                    value="jeux_video">
                                                <label for="jeux_video" class="text-dark ps-2">Jeux video</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="musique" value="musique">
                                                <label for="musique" class="text-dark ps-2">Musique</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="peinture"
                                                    value="peinture">
                                                <label for="peinture" class="text-dark ps-2">Peinture</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="ecriture"
                                                    value="ecriture">
                                                <label for="ecriture" class="text-dark ps-2">Ecriture</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="photographie"
                                                    value="photographie">
                                                <label for="photographie" class="text-dark ps-2">Photographie</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="jardinage"
                                                    value="jardinage">
                                                <label for="jardinage" class="text-dark ps-2">Jardinage</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="lecture" value="lecture">
                                                <label for="lecture" class="text-dark ps-2">Lecture</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="danse" value="danse">
                                                <label for="danse" class="text-dark ps-2">Danse</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="peche" value="peche">
                                                <label for="peche" class="text-dark ps-2">Pêche</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="cinema" value="cinema">
                                                <label for="cinema" class="text-dark ps-2">Cinema</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="sorties" value="sorties">
                                                <label for="sorties" class="text-dark ps-2">Sorties</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="technologie"
                                                    value="technologie">
                                                <label for="technologie" class="text-dark ps-2">Technologie</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="mode" value="mode">
                                                <label for="mode" class="text-dark ps-2">Mode</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="voyages" value="voyages">
                                                <label for="voyages" class="text-dark ps-2">Voyages</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="bricolage"
                                                    value="bricolage">
                                                <label for="bricolage" class="text-dark ps-2">Bricolage</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="chasse" value="chasse">
                                                <label for="chasse" class="text-dark ps-2">Chasse</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="reseaux_sociaux"
                                                    value="reseaux_sociaux">
                                                <label for="reseaux_sociaux" class="text-dark ps-2">Réseaux
                                                    sociaux</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="jeux_de_societe"
                                                    value="jeux_de_societe">
                                                <label for="jeux_de_societe" class="text-dark ps-2">Jeux de
                                                    société</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="maquillage"
                                                    value="maquillage">
                                                <label for="maquillage" class="text-dark ps-2">Maquillage</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="coiffure"
                                                    value="coiffure">
                                                <label for="coiffure" class="text-dark ps-2">Coiffure</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="conduite"
                                                    value="conduite">
                                                <label for="conduite" class="text-dark ps-2">Conduite</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="dessin" value="dessin">
                                                <label for="dessin" class="text-dark ps-2">Dessin</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="shopping"
                                                    value="shopping">
                                                <label for="shopping" class="text-dark ps-2">Shopping</label>
                                            </div>
                                            <div class="d-inline-flex align-items-center m-1">
                                                <input type="checkbox" class="plus-minus" id="nouriture"
                                                    value="nouriture">
                                                <label for="nouriture" class="text-dark ps-2">Nouriture</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="tab-pane" role="tabpanel">
                                        <div class="text-center p-4">
                                            <input class="btn btn-col col-4" type="submit" value="Commencer l'aventure"
                                                id="suivant_infoPerso" name="soumettre" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--Content ends-->
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>
    <script>
    $('#smartwizard').smartWizard({
        selected: 0, // Initial selected step, 0 = first step
        theme: 'progress', // theme for the wizard, related css need to include for other than default theme
        justified: true, // Nav menu justification. true/false
        darkMode: true, // Enable/disable Dark Mode if the theme supports. true/false
        autoAdjustHeight: true, // Automatically adjust content height
        cycleSteps: false, // Allows to cycle the navigation of steps
        backButtonSupport: true, // Enable the back button support
        enableURLhash: false, // Enable selection of the step based on url hash
        transition: {
            animation: 'fade', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
            speed: '400', // Transion animation speed
            easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
        },
        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: 'center', // left, right, center
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
        },
        anchorSettings: {
            anchorClickable: true, // Enable/Disable anchor navigation
            enableAllAnchors: false, // Activates all anchors clickable all times
            markDoneStep: true, // Add done state on navigation
            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
        keyboardSettings: {
            keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            keyLeft: [37], // Left key code
            keyRight: [39] // Right key code
        },
        lang: { // Language variables for button
            next: 'Suivant',
            previous: 'Précédent'
        },
        disabledSteps: [], // Array Steps disabled
        errorSteps: [], // Highlight step with errors
        hiddenSteps: [] // Hidden steps
    });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    </script>


</body>

</html>