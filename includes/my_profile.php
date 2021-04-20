<div class="container">
    <div class="main-body">
        <div class="row my-2">
            <?php
                if(empty($current_user_photo_de_couverture)){
                    ?>
                        <img src="./img/default_pc.jpg" alt="photo_couverture" class="social-cover">
                    <?php
                } else {
                    ?>
                        <img src="./uploads/<?= $current_user_photo_de_couverture ?>" alt="photo_couverture" class="social-cover">
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
                                if(empty($current_user_photo_de_profil)){
                                    if ($current_user_sexe == "M") {
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
                                        <img src="./uploads/<?= $current_user_photo_de_profil ?>" alt="Admin" class="rounded-circle" width="150" id="photo_profil">
                                    <?php
                                }
                                
                            ?>
                            <div class="mt-3">
                                <h4>
                                    <?= $current_user_firstname." ".$current_user_lastname?>
                                    <?php
                                        if ($current_user_sexe == "M") {
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
                                <p class="text-secondary mb-1"><?= $current_user_profession ?></p>
                                <p class="text-muted font-size-sm"><?= $current_user_lieu_habitation ?></p>
                                <a class="btn btn-primary" href="?page=settings">Modifier mon profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fas fa-user-circle fa-lg mx-1"></i>Nom d'utilisateur</h6>
                            <span class="text-secondary">@<?= $current_user_pseudo ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fab fa-facebook-square fa-lg mx-1 text-primary"></i>Facebook
                            </h6>
                            <span class="text-secondary">
                                <a href="https://www.facebook.com/<?= $current_user_compte_facebook ?>">
                                    <?= $current_user_compte_facebook ?>
                                </a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fab fa-instagram-square fa-lg mx-1 text-danger"></i>Instagram
                            </h6>
                            <span class="text-secondary">
                                <a href="https://www.instagram.com/<?= $current_user_compte_instagram ?>">
                                    <?= $current_user_compte_instagram ?>
                                </a>  
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fab fa-twitter-square fa-lg mx-1 text-info"></i>Twitter</h6>
                            <span class="text-secondary">
                                <a href="https://www.twitter.com/<?= $current_user_compte_twitter ?>">
                                    <?= $current_user_compte_twitter ?>
                                </a>
                            </span>
                        </li>


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
                                <?= $current_user_lastname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Prénom(s)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $current_user_firstname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $current_user_adresse_email ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date de naissance</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php 
                                    echo date("d/m/Y", strtotime($current_user_date_de_naissance));
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
                                <p class="note" style="text-align: justify"><?= $current_user_bio ?></p>
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
                                <p><?= $current_user_raison ?></p>
                                <hr>
                                <h6><i class="fab fa-gratipay text-danger fa-lg me-1"></i>Hobbies</h6>
                                <ul>
                                    <?php
                                        $hobbies = explode(",", $current_user_hobbies);
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