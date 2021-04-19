<div class="container light-style flex-grow-1 container-p-y">

    <h2 class="font-weight-bold py-3 my-2 ms-2">
        Paramètres
    </h2>
    <form action="./traitements/traitement_modification_profil.php" method="post" enctype="multipart/form-data">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Réseaux sociaux</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Sécurité</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a>
                    </div>
                </div>

                <div class="col-md-9 pe-5">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="d-flex flew-row mt-3">
                                <div class="card-body d-flex media align-items-center">
                                    <img src="./uploads/<?= $current_user_photo_de_profil ?>" alt="photo_profil"
                                        class="d-block ui-w-80" id="photo_profil">
                                    <div class="media-body ms-4">
                                        <label class="btn btn-primary">
                                            Nouvelle photo de profil
                                            <input type="file" class="account-settings-fileinput" name="photo_de_profil" accept="image/*" onchange="showPreview_pp(event);">
                                        </label> &nbsp;

                                        <div class="text-light small mt-1">Seulement JPG, GIF ou PNG. Max size of 800K</div>
                                    </div>
                                </div>

                                <div class="card-body d-flex media align-items-center">
                                    <img src="./uploads/<?= $current_user_photo_de_couverture ?>" alt="photo_couverture" class="d-block ui-w-150" id="photo_de_couverture">
                                    <div class="media-body ms-4">
                                        <label class="btn btn-primary">
                                            Nouvelle photo de couverture
                                            <input type="file" class="account-settings-fileinput" name="photo_de_couverture" accept="image/*" onchange="showPreview_pc(event);">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Supprimer</button>

                                        <div class="text-light small mt-1">Seulement JPG, GIF ou PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>

                            <hr class="border-light m-0">

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="form-group col-6">
                                        <label class="form-label">Prénom(s)</label>
                                        <input type="text" class="form-control mb-1" name="prenoms" value="<?= $current_user_firstname ?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="nom" value="<?= $current_user_lastname ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-6">
                                        <label class="form-label">Nom d'utilisateur</label>
                                        <input type="text" class="form-control mb-1" name="pseudo" value="<?= $current_user_pseudo ?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-label">Adresse e-mail</label>
                                        <input type="email" class="form-control mb-1" name="email" value="<?= $current_user_adresse_email ?>">
                                    </div>
                                </div>
                                <div class="alert alert-warning">
                                    Your email is not confirmed. Please check your inbox.<br>
                                    <a href="javascript:void(0)">Resend confirmation</a>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body my-3">

                                <div class="form-group mb-3">
                                    <label class="form-label" for="bio">Bio</label>
                                    <textarea class="form-control" name="bio"
                                        rows="5"><?= $current_user_bio ?></textarea>
                                </div>
                                <hr class="border-light m-0">
                                <div class="row align-items-center my-3">
                                    <div class="form-group col-3">
                                        <label class="form-label">Date de naissance</label>
                                        <input type="date" name="date_de_naissance" class="form-control" value="<?= $current_user_date_de_naissance ?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-label">Lieu d'habitation</label>
                                        <input type="text" name="lieu_d_habitation" class="form-control"
                                            value="<?= $current_user_lieu_habitation ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="form-label">Profession</label>
                                        <input type="text" name="profession" class="form-control" value="<?= $current_user_profession ?>">
                                    </div>

                                </div>
                                <hr class="border-light m-0">
                                <div class="row mt-3">
                                    <div class="form-group">
                                        <label class="form-label">Raison</label>
                                        <select class="form-select" aria-label="Default select example" name="raison">
                                            <option value="1">Célibataire en quête d'amour.</option>
                                            <option value="2" selected>Recherche un cavalier pour une cérémonie.</option>
                                            <option value="3">Juste envie d'une aventure.</option>
                                            <option value="4">Envie d'un date.</option>
                                            <option value="5">Recherche un(e) ami(e) ou plus si affinités.</option>
                                        </select>
                                    </div>

                                </div>


                            </div>


                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body py-5">


                                <div class="form-group col-7">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="compte_facebook" value="<?= $current_user_compte_facebook ?>">
                                </div>
                                <div class="form-group my-3 col-7">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="compte_instagram" value="<?= $current_user_compte_instagram ?>">
                                </div>
                                <div class="form-group col-7">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="compte_twitter" value="<?= $current_user_compte_twitter ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body py-5">

                                <div class="form-group col-7">
                                    <label class="form-label">Mot de passe actuel</label>
                                    <input type="password" class="form-control" name="mdp_actuel">
                                </div>

                                <div class="form-group my-3 col-7">
                                    <label class="form-label" >Nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="nouveau_mdp">
                                </div>

                                <div class="form-group col-7">
                                    <label class="form-label">Confirmation du nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="confirmation_mdp">
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                            class="ion ion-md-close"></i> Remove</a>
                                    <i class="ion ion-logo-google text-google"></i>
                                    You are connected to Google:
                                </h5>
                                nmaxwell@mail.com
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to
                                    <strong>Instagram</strong></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">

                                <h6 class="mb-4">Activity</h6>

                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked="">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked="">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">

                                <h6 class="mb-4">Application</h6>

                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked="">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked="">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly blog digest</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-end mt-3">
            <input type="submit" class="btn btn-primary" name="soumettre" value="Enregistrer les modifications">&nbsp;
            <a class="btn btn-default" href="javascript:history.go(-1)">Annuler</a>
        </div>
    </form>
</div>

<script src="js/settings.js"></script>