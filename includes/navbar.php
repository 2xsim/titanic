<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
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
                    <a class="nav-link" href="" rel="nofollow" target="_blank">Qui sommes-nous ?</a>
                </li>
            </ul>
            <?php
                if (isset($_SESSION['page'])) {
                    switch ($_SESSION['page']) {
                        case 'inscription':
                            echo'<a class="btn btn-outline-light btn-rounded" href="">Se connecter
                                </a>';
                            break;
                        case 'connexion':
                            echo '<a class="btn btn-outline-light btn-rounded" href="inscription.php">S\'inscrire
                            </a>';
                            break;
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