<?php 
    session_start();
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
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid justify-content-between">
                <!-- Left elements -->
                <div class="d-flex">
                    <!-- Brand -->
                    <a class="navbar-brand nav-link" href="index.php">
                        <strong>Titanic</strong>
                    </a>

                    <!-- Search form -->

                </div>
                <!-- Left elements -->

                <!-- Center elements -->
                <ul class="navbar-nav flex-row d-none d-md-flex align-items-center">
                    <li class="nav-item mx-1 active">
                        <a class="nav-link" href="acc_user.php">
                            <span><i class="fas fa-home fa-lg"></i></span>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                    </li>

                    <li class="nav-item mx-1">
                        <form id="search_form" action="">
                            <input id=search_input type="search">
                            <i class="fa fa-search"></i>
                        </form>
                    </li>

                    <li class="nav-item mx-1">
                        <a class="nav-link" href="?page=users">
                            <span><i class="fas fa-users fa-lg"></i></span>
                            <span class="badge rounded-pill badge-notification bg-danger">2</span>
                        </a>
                    </li>
                </ul>
                <!-- Center elements -->

                <!-- Right elements -->
                <ul class="navbar-nav flex-row">
                    <li class="nav-item dropdown me-3 me-lg-1">
                        <a class="nav-link" href="?page=chat" role="button">
                            <i class="fas fa-comments fa-lg"></i>

                            <span class="badge rounded-pill badge-notification bg-danger">6</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown me-3 me-lg-1">
                        <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell fa-lg"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">12</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Avatar -->
                    <li class="nav-item dropdown me-3 me-lg-1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <strong class="d-none d-sm-block mx-2">2xsim_</strong>
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                                height="26" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item d-flex align-items-center justify-content-center" href="#"><span
                                        class="material-icons me-1">
                                        person
                                    </span>Mon
                                    profil</a></li>
                            <li><a class="dropdown-item d-flex align-items-center justify-content-center" href="#"><span
                                        class="material-icons me-1">
                                        settings
                                    </span>Paramètres</a></li>
                            <li class="divider dropdown-divider"></li>
                            <li><a class="dropdown-item d-flex align-items-center justify-content-center" href="#"><span
                                        class="material-icons-outlined me-1">
                                        power_settings_new
                                    </span>Déconnexion</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- Right elements -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <?php
    $page = $_GET['page'];
    include("./includes/$page.php");
    ?>

    <!--Main Navigation-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


</body>

</html>