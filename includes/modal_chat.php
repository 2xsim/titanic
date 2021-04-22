<div class="modal fade" id="modal_chat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
            <div class="px-0">
                <div class="d-flex mx-3 mb-4 text-center align-items-center justify-content-center">
                    <div class="thumb-sm">
                        <?php
                            if(empty($user_photo_de_profil)){
                                if ($user_sexe == "M") {
                                    ?>
                                        <img src="./img/male.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                    <?php
                                } else {
                                    ?>
                                        <img src="./img/female.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                    <?php
                                }
                                
                                
                            } else {
                                ?>
                                    <img src="./uploads/<?= $user_photo_de_profil ?>" class="rounded-circle img-thumbnail" alt="profile-image">
                                <?php
                            }
                            
                        ?>
                    </div>

                    <div class="ms-4">
                        <div class="mb-1">
                            <h4 class="mb-0"><!-- Normalement c'est ici que s'affiche le nom--></h4>
                        </div>
                    </div>
                </div>
                <div class="px-4 mb-4 border chat-box chat-box-single bg-light">
                    <!-- Sender Message-->
                    <br>
                    <div id="chat_box">
                        
                    </div>
                </div>

                <!-- Typing area -->
                <form action="" class="ps-4 border bg-light" autocomplete="off"  id="typing-area">
                    <div class="input-group">
                        <input type="text" class="incoming_id" name="incoming_id" value="<?= $_GET["user_pseudo"] ?>" hidden>
                        <input type="text" name="message" placeholder="Entrez votre message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light" id="message" >
                        <div class="input-group-append">
                            <button id="button-addon2" type="submit" class="btn btn-link" disabled>
                                <span class="material-icons-round">
                                    send
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#message").keyup(function() {
        activeModifyPasswordButton()
    });


    function activeModifyPasswordButton() {
        var message = $("#message").val();
        message = $.trim(message);
        if (message != "") {
            $("#button-addon2").prop("disabled", false);
        } else {
            $("#button-addon2").prop("disabled", true);
        }

    }
</script>
<script src="js/chat.js"></script>
