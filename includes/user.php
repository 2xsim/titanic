<?php
    include "config_db.php";

    
    if (isset($_GET["user_pseudo"])) {
        $user_pseudo = trim($_GET["user_pseudo"]);
        $request = "SELECT * FROM users WHERE pseudo = '$user_pseudo';" ;

        $result = mysqli_query( $chConnect, $request) ;
        $result = $result->fetch_row();
        if (isset($result)) {
            # code...
            $user_pseudo = $result[0];
            $user_lastname =$result[1];
            $user_firstname= $result[2];
            $user_sexe = $result[3];
            $user_date_de_naissance = $result[4];
            $user_adresse_email = $result[5];
            $user_photo_de_profil = $result[7];
            $user_photo_de_couverture = $result[8];
            $user_bio = $result[9];
            $user_raison = $_SESSION["ref_raison"][$result[10]];
            $user_hobbies = $result[11];
            $user_profession = $result[12];
            $user_lieu_habitation = $result[13];
            $user_compte_facebook = $result[14];
            $user_compte_instagram = $result[15];
            $user_compte_twitter = $result[16];
            $user_statut = $result[17];

        }else {
            # code...
            header("Location: acc_user.php?page=user");
        }

    }else {
        header("Location: acc_user.php?page=user");
    }
?>


<div class="container">
    <div class="main-body">
        <div class="row my-2">
            <?php
                if(empty($user_photo_de_couverture)){
                    ?>
                        <img src="./img/default_pc.jpg" alt="photo_couverture" class="social-cover">
                    <?php
                } else {
                    ?>
                        <img src="./uploads/<?= $user_photo_de_couverture ?>" alt="photo_couverture" class="social-cover">
                    <?php
                }
                
            ?>
        </div>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex flex-column align-items-center text-center">
                            <?php
                                if(empty($user_photo_de_profil)){
                                    if ($user_sexe == "M") {
                                        ?>
                                            <img src="./img/male.jpg" alt="Admin" class="rounded-circle" width="150" id="photo_profil">
                                        <?php
                                    } else {
                                        ?>
                                            <img src="./img/female.jpg" alt="Admin" class="rounded-circle" width="150" id="photo_profil">
                                        <?php
                                    }
                                    
                                    
                                } else {
                                    ?>
                                        <img src="./uploads/<?= $user_photo_de_profil ?>" alt="Admin" class="rounded-circle" width="150" id="photo_profil">
                                    <?php
                                }
                                
                            ?>
                            <div class="mt-3">
                                <h4>
                                    <?= $user_firstname." ".$user_lastname?>
                                    <?php
                                        if ($user_sexe == "M") {
                                            ?>
                                            <i class="fas fa-mars fa-lg text-primary"></i>
                                            <?php
                                        }else{
                                            ?>
                                            <i class="fas fa-venus fa-lg text-danger"></i>
                                            <?php
                                        }
                                    ?>
                                </h4>
                                <p class="text-secondary mb-1"><?= $user_profession ?></p>
                                <p class="text-muted font-size-sm"><?= $user_lieu_habitation ?></p>
                                <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal_chat">Message</button>
                                <?php
                                    include("./includes/modal_chat.php");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fas fa-user-circle fa-lg mx-1"></i>Nom d'utilisateur</h6>
                            <span class="text-secondary">@<?= $user_pseudo ?></span>
                        </li>
                        
                        <?php
                            if (!empty($user_compte_facebook)) {
                                ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="fab fa-facebook-square fa-lg mx-1 text-primary"></i>Facebook
                                        </h6>
                                        <span class="text-secondary"><a href="https://www.facebook.com/<?= $user_compte_facebook ?>"><?= $user_compte_facebook ?></a></span>
                                    </li>
                                <?php
                            }

                            if (!empty($user_compte_instagram)) {
                                ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="fab fa-instagram-square fa-lg mx-1 text-danger"></i>Instagram
                                        </h6>
                                        <span class="text-secondary"><a href="https://www.instagram.com/<?= $user_compte_instagram ?>"><?= $user_compte_instagram ?></a></span>
                                    </li>
                                <?php
                            }

                            if (!empty($user_compte_twitter)) {
                                ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="fab fa-twitter-square fa-lg mx-1 text-info"></i>Twitter</h6>
                                        <span class="text-secondary"><a href="https://www.twitter.com/<?= $user_compte_twitter ?>"><?= $user_compte_twitter ?></a></span>
                                    </li>
                                <?php
                            }
                            
                        ?>


                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nom</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user_lastname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Prénom(s)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user_firstname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user_adresse_email ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date de naissance</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                        <?php
                                            $date_naissance= new DateTime($user_date_de_naissance);
                                            $date_time = new DateTime(date("Y-m-d")) ;
                                            $age = $date_naissance->diff($date_time);
                                            echo $age->format('%y ans') ;
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">
                                    <span class="material-icons text-info me-1">description</span>
                                    Bio
                                </h6>
                                <p class="note" style="text-align: justify"><?= $user_bio ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><span
                                        class="material-icons text-danger me-1">
                                        person_search
                                    </span>Raison</h6>
                                <p><?= $user_raison ?></p>
                                <hr>
                                <h6><i class="fab fa-gratipay text-danger fa-lg me-1"></i>Hobbies</h6>
                                <ul>
                                    <?php
                                        $hobbies = explode(",", $user_hobbies);
                                        foreach ($hobbies as $key => $value) {
                                            ?>
                                                <li><?= $value ?></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>