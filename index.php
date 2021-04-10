<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Titanic - Accueil</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css'>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel="stylesheet" href="./css/style_header.css">
    <link rel="stylesheet" href="./css/style_index.css">

</head>

<body>

        <?php 
            $_SESSION['page'] = "index";
            include "includes/navbar.php";
        ?>

    <div class="container py-5">
        <blockquote class="blockquote text-center text-success">
            <p>Cent vices n'ont jamais donné autant de vrais plasirs qu'une seule vertu.</p>
            <footer class="blockquote-footer">Proverbe chinois, <cite title="The Greek Way">La pensée et la sagesse
                    chinoise</cite></footer>
            <p>
                Coup d'un soir, relations particulières, relation sérieuse, relation à distance, ous avez le drot de
                faire
                ce que vous voulez. Notre obectif est de vous présenter des personnes qui répondent à vos attentes et
                qui partagent la même vision que vous. Notre puissant algorithme est basée sur la transparence et
                l'envie de satisfaire saura répondre à vos attentes. Dites juste ce que vous voulez et nous nous
                chargeons du reste.
            </p>
        </blockquote>
    </div>

    <div class="container hero">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">L'équipe dirigeante</h1>
            </div>
        </div>
    </div>


    <div class="container d-flex justify-content-around">
        <div class="testimonial">
            <div class="row">
                <div class="avatar col-md-5">
                    <a href="#">
                        <img class="img-circle" src="https://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                    </a>
                </div>

                <div class="testimonial-main col-md-7">
                    <h4 class="media-heading"><a href="#m">Patrick ZOUNON</a></h4>
                    <p class="testimony-body">Le Bilou, c'est comme ça que son entourage l'appelle. Ce surnom sert à
                        mettre l'accent sur son élégance et son habilité à la parole qui ne laisse pas indiférentes
                        toutes ces femmes qu'il approche.</p>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="row">
                <div class="avatar col-md-5">
                    <a href="#">
                        <img class="img-circle" src="https://bootdey.com/img/Content/user_2.jpg" alt="Taylor Otwell">
                    </a>
                </div>

                <div class="testimonial-main col-md-7">
                    <h4 class="media-heading"><a href="#">Mike Prince SIMEDA</a></h4>
                    <p class="testimony-body">Le 11, pour faire référence à un joueur très perfomant qu'on connaît bien,
                        cet homme n'est pas prêt à s'attacher et multiplie les conquêtes sur courtes durées. Il maitrîse
                        bien son sujet et vous en dira surement plus lors de nos ateliers. Chacun ses vices et ses
                        délires !</p>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="row">
                <div class="avatar col-md-5">
                    <a href="#">
                        <img class="img-circle" src="https://bootdey.com/img/Content/user_1.jpg" alt="Taylor Otwell">
                    </a>
                </div>

                <div class="testimonial-main col-md-7">
                    <h4 class="media-heading"><a href="#">Mardochée YAO</a></h4>
                    <p class="testimony-body">Alias Joe le rapide.
                        Cet homme n'a même pas besoin d'approcher sa proie pour venir à terme d'elle. Un chanceux de la
                        vie vous direz ? Et bien non! Il a juste profiner son comportement journalier et son aparence.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-around">
        <div class="testimonial">
            <div class="row">
                <div class="avatar col-md-5">
                    <a href="#">
                        <img class="img-circle" src="https://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                    </a>
                </div>

                <div class="testimonial-main col-md-7">
                    <h4 class="media-heading"><a href="#m">Anne Désirée ESSIS</a></h4>
                    <p class="testimony-body">bootstrap rules!</p>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="row">
                <div class="avatar col-md-5">
                    <a href="#">
                        <img class="img-circle" src="https://bootdey.com/img/Content/user_2.jpg" alt="Taylor Otwell">
                    </a>
                </div>

                <div class="testimonial-main col-md-7">
                    <h4 class="media-heading"><a href="#">Darla Marty</a></h4>
                    <p class="testimony-body">Bootdey rules!</p>
                </div>
            </div>
        </div>

    </div>

    <div class="plan2" id="plan2">
    </div>

    <div class="plan3" id="plan3">
        <!-- partial:index.partial.html -->
        <div class="gtco-testimonials">
            <h2>Testimonials Carousel - Cards Comments</h2>
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div>
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300"
                            alt="">
                        <div class="card-body">
                            <h5>Ronne Galle <br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat ” </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                            alt="">
                        <div class="card-body">
                            <h5>Missy Limana<br />
                                <span> Engineer </span>
                            </h5>
                            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat ” </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302"
                            alt="">
                        <div class="card-body">
                            <h5>Martha Brown<br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat ” </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top"
                            src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303"
                            alt="">
                        <div class="card-body">
                            <h5>Hanna Lisem<br />
                                <span> Project Manager </span>
                            </h5>
                            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                impedit quo minus id quod maxime placeat ” </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
        <script src="./js/script.js"></script>
</body>

</html>