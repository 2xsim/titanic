

<div class="content">
    <div class="container-fluid p-5">
        <?php
    include "config_db.php";

    
    if (isset($_GET["objet_research"])) {
        $objet_research = $_GET["objet_research"];
        //$objet_research = $_GET["objet_research"];
        $request = "SELECT * FROM users WHERE pseudo <> '$current_user_pseudo' AND ( pseudo LIKE '$objet_research%' OR nom LIKE '$objet_research%' OR prenoms LIKE '$objet_research%') LIMIT 10;" ;
        # code...
        
        $result = mysqli_query( $chConnect, $request) ;
        $result = $result->fetch_all();
        if (!empty($result)) {
            # code...
        }
        ?>
        <div class="row">
            <?php
            foreach ($result as $row) {
                ?>
            <div class="col-lg-3">
                <div class="text-center card-box mb-4">
                    <div class="member-card py-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="./uploads/<?= $row[7] ?>"
                                class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="mt-2">
                            <h4><?= $row[2]." ".$row[1]?></h4>
                            <p><span><a href="?page=user&user_pseudo=<?= $row[0] ?>"
                                        class="text-danger"><?= $row[0] ?></a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                    class="tooltips" href="" data-original-title="Twitter"><i
                                        class="fab fa-twitter"></i></a></li>

                        </ul>
                        <button type="button" class="button btn-lg btn-primary px-4 p-2 mt-3" data-toggle="modal"
                            data-target="#modal_chat"><i class="fas fa-comments fa-lg me-2"></i>Chatter</button>
                        <?php
                            include("./includes/modal_chat.php");
                        ?>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-3">
                                    <div class="mt-3">
                                        <h4>Âge</h4>
                                        <p class="mb-0 text-muted">
                                            <?php
                                                $date_naissance= new DateTime( $row[4]);
                                                $date_time = new DateTime(date("Y-m-d")) ;
                                                $age = $date_naissance->diff($date_time);
                                                echo $age->format('%y ans') ;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-3">
                                        <h4>Lieu d'habitation</h4>
                                        <p class="mb-0 text-muted">Marrakech, Maroc</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mt-3">
                                        <h4>Profession</h4>
                                        <p class="mb-0 text-muted">Etudiant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <?php
            }
        ?>
        </div>
        <!-- end row -->

        <?php
        
    }else {
        ?>
            <p>Aucun résultat</p>
        <?php
    }
        ?>
    </div>
    <!-- container -->
</div>
