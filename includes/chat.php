<?php
    include "config_db.php";

    
    if (isset($_SESSION["current_user_pseudo"])) {
        $request = "SELECT * FROM `messagerie` WHERE pseudo_from = '$current_user_pseudo' OR pseudo_to = '$current_user_pseudo'  ;" ;
        $result = mysqli_query( $chConnect, $request) ;
        $result = $result->fetch_all();
    }
?>


<div class="container-fluid bg-white py-5 px-5">

    <div class="row rounded-lg overflow-hidden shadow">
        <!-- Users box-->
        <div class="col-5 px-0">
            <div class="bg-light">
                <div class="bg-light px-4 py-2">
                    <p class="h5 mb-0 py-1">Recent</p>
                </div>

                <div class="messages-box">
                    <div class="list-group rounded-0">
                        <!--C'est ici que sera affichée la liste des discussions-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-7 px-0">
            <div class="px-4 py-5 chat-box bg-light">
        <?php
            if (isset($_GET["pseudo_interlocuteur"])) {
                ?>
                
                        <!-- Sender Message-->
                        <div class="d-inline-flex me-5 mb-3">
                            <div class="flex-shrink-0"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user"
                                    width="50" class="rounded-circle" /></div>
                            <div class="flex-grow-1 ms-3">
                                <div class="bg-dark rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-light">
                                        Le 11, pour faire référence à un joueur très perfomant qu'on connaît bien,
                                        cet homme n'est pas prêt à s'attacher et multiplie les conquêtes sur courtes durées. Il
                                        maitrîse
                                        bien son sujet et vous en dira surement plus lors de nos ateliers. Chacun ses vices et
                                        ses
                                        délires !
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="d-flex justify-content-end ms-5 mb-3">
                            <div class="text-end">
                                <div class="bg-success rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">
                                        Test which is a new approach to have all
                                        solutions
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="d-inline-flex mw-75 mb-3">
                            <div class="flex-shrink-0"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user"
                                    width="50" class="rounded-circle" /></div>
                            <div class="flex-grow-1 ms-3">
                                <div class="bg-dark rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">
                                        Test, which is a new approach to have
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="d-flex justify-content-end ms-5 mb-3">
                            <div class="text-end">
                                <div class="bg-success rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">
                                        Test which is a new approach to have all
                                        solutions Test which is a new approach to have all
                                        solutions
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="d-inline-flex me-5 mb-3">
                            <div class="flex-shrink-0"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user"
                                    width="50" class="rounded-circle" /></div>
                            <div class="flex-grow-1 ms-3">
                                <div class="bg-dark rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-light">
                                        Le 11, pour faire référence à un joueur très perfomant qu'on connaît bien.
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="d-flex justify-content-end ms-5 mb-3">
                            <div class="text-end">
                                <div class="bg-success rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">
                                        Test which is a new approach to have all
                                        solutions
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="d-inline-flex me-5 mb-3">
                            <div class="flex-shrink-0"><img
                                    src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user"
                                    width="50" class="rounded-circle" /></div>
                            <div class="flex-grow-1 ms-3">
                                <div class="bg-dark rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-light">
                                        Le 11, pour faire référence à un joueur très perfomant qu'on connaît bien.
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="d-flex justify-content-end ms-5 mb-3">
                            <div class="text-end">
                                <div class="bg-success rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">
                                        Test which is a new approach to have all
                                        solutions
                                    </p>
                                </div>
                                <p class="small text-muted">
                                    12:00 PM | Aug 13
                                </p>
                            </div>
                        </div>
                    

                    <!-- Typing area -->
                    <form action="#" class="bg-light">
                        <div class="input-group">
                            <input type="text" placeholder="Type a message" aria-describedby="button-addon2"
                                class="form-control rounded-0 border-0 py-4 bg-light" />
                            <div class="input-group-append">
                                <button id="button-addon2" type="submit" class="btn btn-link">
                                    <span class="material-icons-round">
                                        send
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                
                <?php
            } else {
                ?>
                    <p> Veuillez sélectionner une discussion </p>
                <?php
            }
        ?>
        </div>
        </div> 
        <!-- Chat Box-->
        
    </div>
</div>

<script src="js/chat.js"></script>