


<?php
            if (isset($_SESSION['page'])) {
                switch ($_SESSION['page']) {
                    case 'inscription':
                        echo '
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
                        </nav>';
                        break;
                    
                    
                    case 'connexion':
                        echo '
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
                    
                    
                                <a class="btn btn-outline-light btn-rounded" href="inscription.php">S\'inscrire
                                                </a>
                                
                            </div>
                        </div>
                        </nav>';
                            break;
                        
                        
                        case 'index' :
                            echo'
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
                                    <a class="btn btn-outline-light btn-rounded" href="inscription.php">S\'inscrire
                                    </a>
                                    
                                </div>
                            </div>
                            </nav>';
                            break;

                        case 'acc_user' :
                            echo
                            '
                            <nav class="navbar fixed-top navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
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
                        
                        
                                    <div>
                                    <form action="tt.php" method="POST">
                                        <input type="search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                    </div>
                                    <a class="btn btn-outline-light btn-rounded" href="inscription.php">Déconnexion
                                    </a>
                                    
                                </div>
                            </div>
                            </nav>' ;
                            break ;
                        
                        default:
                            echo "DEFAUT";
                            break;
                    
                }
            }
            ?>