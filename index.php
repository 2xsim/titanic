<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>WeMeet - Connexion</title>
        <!-- Font Awesome -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
        />
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <!--Main Navigation-->
        <header>
            <style>
                #intro {
                    background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
                    height: 100vh;
                }

                /* Height for devices larger than 576px */
                @media (min-width: 992px) {
                    #intro {
                        margin-top: -58.59px;
                    }
                }

                .navbar .nav-link {
                    color: #fff !important;
                }
            </style> 

            <?php 
                include "includes/navbar.html";
            ?>

            <!-- Background image -->
            <div id="intro" class="bg-image shadow-2-strong">
                <div
                    class="mask d-flex align-items-center h-100"
                    style="background-color: rgba(0, 0, 0, 0.8)"
                >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <form
                                    class="bg-white rounded shadow-5-strong p-5"
                                >
                                <h3 class="card-title">Dépêchez-vous !</h3>
    <h6 class="card-subtitle mb-2 text-muted">Vous avez raté tellement de choses</h6>
    <br>
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input
                                            type="email"
                                            id="form1Example1"
                                            class="form-control"
                                        />
                                        <label
                                            class="form-label"
                                            for="form1Example1"
                                            >Adresse e-mail</label
                                        >
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input
                                            type="password"
                                            id="form1Example2"
                                            class="form-control"
                                        />
                                        <label
                                            class="form-label"
                                            for="form1Example2"
                                            >Mot de passe</label
                                        >
                                    </div>

                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4">
                                        <div
                                            class="col d-flex justify-content-center"
                                        >
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="form1Example3"
                                                    checked
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="form1Example3"
                                                >
                                                    Se souvenir
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col text-center">
                                            <!-- Simple link -->
                                            <a href="#!">Mot de passe oublié ?</a>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-block"
                                    >
                                        Se connecter
                                    </button>
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
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
    </body>
</html>
