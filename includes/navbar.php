<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
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
            <?php
                if (isset($_SESSION['page'])) {
                    switch ($_SESSION['page']) {
                        case 'inscription':
                            echo'<a class="btn btn-outline-light btn-rounded" href="connexion.php">Se connecter
                                </a>';
                            break;
                        case 'connexion':
                            echo '<a class="btn btn-outline-light btn-rounded" href="inscription.php">S\'inscrire
                            </a>';
                            break;
                        
                        case 'index' :
                            echo'<a class="btn btn-outline-light btn-rounded" href="connexion.php">Se connecter
                                </a>';
                            echo '<a class="btn btn-outline-light btn-rounded" href="inscription.php">S\'inscrire
                                </a>';
                            break;

                        case 'acc_user' :
                            echo 
                                '<div>
                                    <form action="tt.php" method="POST">
                                        <input type="search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div>' ;
                            break ;
                        
                        default:
                            echo "DEFAUT";
                            break;
                    }
                }
            ?>
        </div>
    </div>
</nav>
<!-- Navbar -->