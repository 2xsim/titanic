<div class="container light-style flex-grow-1 container-p-y">

    <h2 class="font-weight-bold py-3 my-2 ms-2">
        Paramètres
    </h2>

    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" data-toggle="list"
                        href="#account-general">General</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="#account-change-password">Sécurité</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="#account-social-links">Réseaux sociaux</a>
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
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""
                                    class="d-block ui-w-80">
                                <div class="media-body ms-4">
                                    <label class="btn btn-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>

                            <div class="card-body d-flex media align-items-center">
                                <img src="./img/azrul-aziz-DsvY9NRykRg-unsplash.jpg" alt="" class="d-block ui-w-150">
                                <div class="media-body ms-4">
                                    <label class="btn btn-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                        </div>

                        <hr class="border-light m-0">

                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="form-group col-6">
                                    <label class="form-label">Prénom(s)</label>
                                    <input type="text" class="form-control mb-1" value="Ezekias Mike Prince">
                                </div>
                                <div class="form-group col-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" value="SIMEDA">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-6">
                                    <label class="form-label">Nom d'utilisateur</label>
                                    <input type="text" class="form-control mb-1" value="2xsim_">
                                </div>
                                <div class="form-group col-6">
                                    <label class="form-label">Adresse e-mail</label>
                                    <input type="email" class="form-control mb-1" value="nmaxwell@mail.com">
                                </div>
                            </div>
                            <div class="alert alert-warning">
                                Your email is not confirmed. Please check your inbox.<br>
                                <a href="javascript:void(0)">Resend confirmation</a>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="account-change-password">
                        <div class="card-body py-5">

                            <div class="form-group col-7">
                                <label class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group my-3 col-7">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group col-7">
                                <label class="form-label">Confirmation du nouveau mot de passe</label>
                                <input type="password" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-info">
                        <div class="card-body my-3">

                            <div class="form-group mb-3">
                                <label class="form-label" for="bio">Bio</label>
                                <textarea class="form-control"
                                    rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                            </div>
                            <hr class="border-light m-0">
                            <div class="row align-items-center my-3">
                                <div class="form-group col-3">
                                    <label class="form-label">Date de naissance</label>
                                    <input type="date" name="date_de_naissance" class="form-control" value="1999-01-19">
                                </div>
                                <div class="form-group col-6">
                                    <label class="form-label">Lieu d'habitation</label>
                                    <input type="text" name="lieu_d_habitation" class="form-control"
                                        value="Marrakech, Maroc">
                                </div>
                                <div class="form-group col-3">
                                    <label class="form-label">Profession</label>
                                    <input type="text" name="profession" class="form-control" value="Etudiant">
                                </div>

                            </div>
                            <hr class="border-light m-0">
                            <div class="row mt-3">
                                <div class="form-group">
                                    <label class="form-label">Raison</label>
                                    <select class="form-select" aria-label="Default select example" name="raison">
                                        <option value="1">One</option>
                                        <option value="2" selected>Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                            </div>


                        </div>


                    </div>
                    <div class="tab-pane fade" id="account-social-links">
                        <div class="card-body py-5">


                            <div class="form-group col-7">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" value="https://www.facebook.com/user">
                            </div>
                            <div class="form-group my-3 col-7">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" value="https://www.instagram.com/2xsim_">
                            </div>
                            <div class="form-group col-7">
                                <label class="form-label">Twitter</label>
                                <input type="text" class="form-control" value="https://twitter.com/2xsim_">
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

    <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
    </div>

</div>