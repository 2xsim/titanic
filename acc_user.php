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

    <link rel="stylesheet" href="css/style_acc_user.css">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <?php 
                $_SESSION['page'] = "acc_user";
                include "includes/navbar.php";
        ?>
    </header>

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Michele Miller</h3>
                                <h4 class="title">Web Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Patricia Knott</h3>
                                <h4 class="title">Web Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Justin Ramos</h3>
                                <h4 class="title">Web Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                                <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Mary Huntley</h3>
                                <h4 class="title">Web Developer</h4>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                                <li>
                                    <a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->

    <!--Main Navigation-->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


</body>

</html>