<?php
        echo '<header>';
            if (isset($_SESSION['page'])) {
                switch ($_SESSION['page']) {
                    case 'inscription':
                        ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Titanic</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="">Témoignages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Qui sommes-nous ?</a>
                </li>
            </ul>


            <a class="btn btn-outline-light btn-rounded" href="connexion.php">Se connecter
            </a>

        </div>
    </div>
</nav>

<?php ;
                        break;
                    
                    
                    case 'connexion':
                        ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Titanic</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="">Témoignages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Qui sommes-nous ?</a>
                </li>
            </ul>


            <a class="btn btn-outline-light btn-rounded" href="inscription.php">S'inscrire
            </a>

        </div>
    </div>
</nav>

<?php ;
                            break;
                        
                        
                        case 'index' :
                            ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Titanic</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="#plan1">Pourquoi nous choisir ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plan2">Nos conseils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plan3">Témoignages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Les ateliers</a>
                </li>
            </ul>


            <a class="btn btn-outline-light btn-rounded" href="connexion.php">Se connecter
            </a>
            <a class="btn btn-outline-light btn-rounded" href="inscription.php">S'inscrire
            </a>

        </div>
    </div>
</nav>

<?php ;
                            break;

                        case 'acc_user' :
                            ?>

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
                <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <strong class="d-none d-sm-block mx-2"><?= $current_user_pseudo ?></strong>
                    <img src="./uploads/<?= $current_user_photo_de_profil ?>" class="rounded-circle bg-white"
                        height="26" alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=my_profile"><span class="material-icons me-1">
                                person
                            </span>Mon
                            profil</a></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=settings"><span class="material-icons me-1">
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

<?php ;
                            break ;

                        case 'new_user' :
                            ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand nav-link disabled" href="acc_user.php">
                <strong>Titanic</strong>
            </a>

            <!-- Search form -->

        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex align-items-center">
            <li class="nav-item mx-1 active">
                <a class="nav-link active" href="acc_user.php">
                    <span><i class="fas fa-home fa-lg"></i></span>
                </a>
            </li>

            <li class="nav-item mx-1">
                <form id="search_form" action="">
                    <input id="search_input" type="search">
                    <i class="fa fa-search"></i>
                </form>
            </li>

            <li class="nav-item mx-1">
                <a class="nav-link disabled" href="?page=users">
                    <span><i class="fas fa-users fa-lg"></i></span>
                </a>
            </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link disabled" href="?page=chat" role="button">
                    <i class="fas fa-comments fa-lg"></i>

                </a>
            </li>
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle hidden-arrow disabled" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell fa-lg"></i>
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
                <a class="nav-link dropdown-toggle d-flex align-items-center disabled" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <strong class="d-none d-sm-block mx-2"><?= $current_user_pseudo ?></strong>
                    <img src="./uploads/<?= $current_user_photo_de_profil ?>" class="rounded-circle bg-white"
                        height="26" alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=my_profile"><span class="material-icons me-1">
                                person
                            </span>Mon
                            profil</a></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=settings"><span class="material-icons me-1">
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

<?php ;
                        break;
                        
                        default:
                            echo "DEFAUT";
                            break;
                    
                }
            }
            echo '</header>';
            ?>