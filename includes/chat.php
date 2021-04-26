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
                    <p class="h5 mb-0 py-1">Listes des discussions</p>
                </div>

                <div class="messages-box">
                    <div class="list-group rounded-0">
                        <!--C'est ici que sera affichée la liste des discussions-->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-7 px-0">
            
            <?php
                if (!empty($_GET["pseudo_interlocuteur"])) {
                    ?>
                        <div class="px-4 py-5 chat-box bg-light" id="chat_box">

                            <!-- C'est ici que seront affichés les messages de la discussion-->
                        
                        </div>
                        <!-- Typing area -->
                        <form action="" class="bg-light" autocomplete="off"  id="typing-area">
                            <div class="input-group">
                                <input type="text" class="incoming_id" name="incoming_id" value="<?= $_GET["pseudo_interlocuteur"] ?>" hidden>
                                <input type="text" name="message" placeholder="Entrez votre message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light" id="message" >
                                <div class="input-group-append">
                                    <button id="button-addon2" type="submit" class="btn btn-link"  disabled>
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
        <!-- Chat Box-->
        
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

<script>
    usersList = document.querySelector(".list-group");

    setInterval(() =>{
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "traitements/traitement_select_discussions.php", true);
        xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
        }
        xhr.send();
    }, 500);
</script>

<script src="js/chat.js"></script>