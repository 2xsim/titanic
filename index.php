<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Titanic - Accueil</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!--CSS des cartes de témoignages-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css" rel="stylesheet" />





    <link rel="stylesheet" href="css/style_index.css">


<body>
    <!--Main Navigation-->
    <header>

        <?php 
                $_SESSION['page'] = "index";
                include "includes/navbar.php";
        ?>
    </header>

    <!-- Background image-->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">

        </div>
    </div>
    <!-- Background image -->

    <div class="plan1" id="plan1">
    <div class="container" id="blockquote">
      <blockquote class="blockquote text-center text-success">
        <p>It was a Roman who said it was sweet to die for one's country. The Greeks never said it was sweet to die for anything. They had no vital lies.</p>
        <footer class="blockquote-footer">Edith Hamilton, <cite title="The Greek Way">The Greek Way</cite></footer>
      </blockquote>
</div>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">L'équipe dirigeante</h1>
                </div>
            </div>
        </div>
        <div class="container testimonials">
            <div class="row">
                <div class="col-md-4 testimonial">
                    <div class="row">
                        <div class="avatar col-md-5">
                            <a href="#">
                                <img class="img-circle" src="https://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                            </a>
                        </div>

                        <div class="testimonial-main col-md-7">
                            <h4 class="media-heading"><a href="#m">Patrick ZOUNON</a></h4>
                            <p class="testimony-body">Le Bilou, c'est comme ça que son entourage l'appelle. Ce surnom sert à mettre l'accent sur son élégance et son habilité à la parole qui ne laisse pas indiférentes toutes ces femmes qu'il approche.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 testimonial">
                    <div class="row">
                        <div class="avatar col-md-5">
                            <a href="#">
                                <img class="img-circle" src="https://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                            </a>
                        </div>

                        <div class="testimonial-main col-md-7">
                            <h4 class="media-heading"><a href="#">Mike Prince SIMEDA</a></h4>
                            <p class="testimony-body">Le 11, pour faire référence à un joueur très perfomant qu'on connaît bien, cet homme n'est pas prêt à s'attacher et multiplie les conquêtes sur courtes durées. Il maitrîse bien son sujet et vous en dira surement plus lors de nos ateliers. Chacun ses vices et ses délires !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 testimonial">
                    <div class="row">
                        <div class="avatar col-md-5">
                            <a href="#">
                                <img class="img-circle" src="https://bootdey.com/img/Content/user_1.jpg" alt="Taylor Otwell">
                            </a>
                        </div>

                        <div class="testimonial-main col-md-7">
                            <h4 class="media-heading"><a href="#">Mardochée YAO</a></h4>
                            <p class="testimony-body">Alias Joe le rapide.
                                                    Cet homme n'a même pas besoin d'approcher sa proie pour venir à terme d'elle. Un chanceux de la vie vous direz ? Et bien non! Il a juste profiner son comportement journalier et son aparence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 testimonial">
                    <div class="row">
                        <div class="avatar col-md-5">
                            <a href="#">
                                <img class="img-circle" src="https://bootdey.com/img/Content/user_3.jpg" alt="Taylor Otwell">
                            </a>
                        </div>

                        <div class="testimonial-main col-md-7">
                            <h4 class="media-heading"><a href="#m">Amichia</a></h4>
                            <p class="testimony-body">bootstrap rules!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 testimonial">
                    <div class="row">
                        <div class="avatar col-md-5">
                            <a href="#">
                                <img class="img-circle" src="https://bootdey.com/img/Content/user_2.jpg" alt="Taylor Otwell">
                            </a>
                        </div>

                        <div class="testimonial-main col-md-7">
                            <h4 class="media-heading"><a href="#">Anne Marie ESSIS</a></h4>
                            <p class="testimony-body">Plus connu sous le nom de Daisy, cette coach en approche et experte de la séduction et des relations amoureuses sait exactement tout ce qu'il faut dire et faire pour conquérir la personne qu'on aime. Elle a bien fait ses preuves dans plusieurs télé-réalité.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="plan2" id="plan2">
    </div>

    <div class="plan3" id="plan3">
        <div class="test">
        <div class="gtco-testimonials">
    <h2>Testimonials Carousel - Cards Comments</h2>
    <div class="owl-carousel owl-carousel1 owl-theme">
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
          <div class="card-body">
            <h5>Ronne Galle <br />
              <span> Project Manager </span></h5>
            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
              impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
          <div class="card-body">
            <h5>Missy Limana<br />
              <span> Engineer </span></h5>
            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
              impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
          <div class="card-body">
            <h5>Martha Brown<br />
              <span> Project Manager </span></h5>
            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
              impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
      </div>
      <div>
        <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
          <div class="card-body">
            <h5>Hanna Lisem<br />
              <span> Project Manager </span></h5>
            <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
              impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>


        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">Quelques personnes qui nous ont fait confiance</h1>
                </div>
            </div>
        </div>
        <div class="cartes">
            <div class="d-flex justify-content-between items-center h-screen">
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between items-center h-screen">
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/random/1600x900"
                            alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>





    <!--Main Navigation-->

    <!-- MDB -->
    <script>
        (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();



    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>


</body>

</html>