<?php 
    session_start();
    if (!isset($_SESSION["current_user_pseudo"])) {
        header('Location:../connexion.php');
    }else {
        include "../includes/config_db.php";
        $pseudo_from = $_SESSION["current_user_pseudo"];
        $pseudo_to = $_POST['incoming_id'];

        $output = "";
        $request = "SELECT * FROM messagerie WHERE pseudo_from='$pseudo_from' AND pseudo_to = '$pseudo_to' OR pseudo_from='$pseudo_to' AND pseudo_to = '$pseudo_from' ORDER BY id_message ASC";
        $resultat = mysqli_query( $chConnect, $request);

        if(mysqli_num_rows($resultat) > 0){
            while($row = mysqli_fetch_assoc($resultat)){
                $pp="img/male.jpg";
                if (file_exists("../uploads/pp_".$row['pseudo_from'].".jpg")) {
                    $pp = "uploads/pp_".$row['pseudo_from'].".jpg";
                }
                
                if($row['pseudo_from'] == $pseudo_from){
                    $row['date'] = date("d/m/Y", strtotime($row['date']));
                    $row['heure'] = date("G:i", strtotime($row['heure']));
                    $output .= '<div class="d-flex justify-content-end ms-5 mb-3">
                                    <div class="text-end">
                                        <div class="bg-success rounded py-2 px-3 mb-2">
                                            <p class="text-small mb-0 text-white">
                                            '. $row['corps_message'] .'
                                            </p>
                                        </div>
                                        <p class="small text-muted">
                                        '. $row['heure'] .' | '. $row['date'] .'
                                        </p>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="d-flex me-5 mb-3">
                                    <div class="flex-shrink-0"><img
                                            src="'.$pp.'" alt="user"
                                            width="50" class="rounded-circle" /></div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="bg-dark rounded py-2 px-3 mb-2">
                                            <p class="text-small mb-0 text-light">
                                            '. $row['corps_message'] .'
                                            </p>
                                        </div>
                                        <p class="small text-muted">
                                        '. $row['heure'] .' | '. $row['date'] .'
                                        </p>
                                    </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">Aucun message dans cette discussion. Entamez une discussion !</div>';
        }
        echo $output;
    }
?>