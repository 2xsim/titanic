<?php 
    session_start();
    if (!isset($_SESSION["current_user_pseudo"])) {
        header('Location:connexion.php');
    }else {
        $current_user_pseudo = $_SESSION["current_user_pseudo"];
        $current_user_lastname =$_SESSION["current_user_lastname"];
        $current_user_firstname=$_SESSION["current_user_firstname"];
        $current_user_sexe = $_SESSION["current_user_sexe"];
        $current_user_photo_de_profil = $_SESSION["current_user_photo_de_profil"];
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

        <form action="traitements/traitement_new_user.php" method="post">
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
                                            Compléments
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
                                                        placeholder="&nbsp;" required/>
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
                                                        placeholder="&nbsp;" required/>
                                                    <span class="label">Profession</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row p-4">
                                            <div class="col-md-4">
                                                <label for="facebook" class="inp">
                                                    <input type="text" name="facebook" id="facebook"
                                                        placeholder="&nbsp;" />
                                                    <span class="label">Facebook</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="instagram" class="inp">
                                                    <input type="text" name="instagram" id="instagram"
                                                        placeholder="&nbsp;" />
                                                    <span class="label">Instagram</span>
                                                    <svg width="120px" height="26px" viewBox="0 0 120 26">
                                                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25">
                                                        </path>
                                                    </svg>
                                                    <span class="input_border"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="twitter" class="inp">
                                                    <input type="text" name="twitter" id="twitter"
                                                        placeholder="&nbsp;" />
                                                    <span class="label">Twitter</span>
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
                                        <div class="p-4 hobbies">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Jeux vidéos">
                                                        <div class="icon-box">
                                                            <i class="fas fa-gamepad"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Musique">
                                                        <div class="icon-box">
                                                            <i class="fas fa-music"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Peinture">
                                                        <div class="icon-box">
                                                            <i class="fas fa-paint-brush"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Photographie">
                                                        <div class="icon-box">
                                                            <i class="fas fa-camera-retro"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Lecture">
                                                        <div class="icon-box">
                                                            <i class="fas fa-book-open"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Cinema">
                                                        <div class="icon-box">
                                                            <i class="fas fa-film"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Chill">
                                                        <div class="icon-box">
                                                            <i class="fas fa-glass-cheers"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Shopping">
                                                        <div class="icon-box">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Voyages">
                                                        <div class="icon-box">
                                                            <i class="fas fa-plane" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Jardinage">
                                                        <div class="icon-box">
                                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Cuisine">
                                                        <div class="icon-box">
                                                            <i class="fa fa-battery-full" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Reseaux sociaux">
                                                        <div class="icon-box">
                                                            <i class="fa fa-code" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Coiffure">
                                                        <div class="icon-box">
                                                            <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Ecriture">
                                                        <div class="icon-box">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Chasse">
                                                        <div class="icon-box">
                                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Danse">
                                                        <div class="icon-box">
                                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Couture">
                                                        <div class="icon-box">
                                                            <i class="fa fa-battery-full" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Equitation">
                                                        <div class="icon-box">
                                                            <i class="fa fa-code" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Pêche">
                                                        <div class="icon-box">
                                                            <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Poterie">
                                                        <div class="icon-box">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Technologie">
                                                        <div class="icon-box">
                                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Mode">
                                                        <div class="icon-box">
                                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Boxe">
                                                        <div class="icon-box">
                                                            <i class="fa fa-battery-full" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Football">
                                                        <div class="icon-box">
                                                            <i class="fa fa-code" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Jeux de societe">
                                                        <div class="icon-box">
                                                            <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Dessin">
                                                        <div class="icon-box">
                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Tenis">
                                                        <div class="icon-box">
                                                            <i class="fa fa-plane" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="hobbies[]" value="Natation">
                                                        <div class="icon-box">
                                                            <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
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