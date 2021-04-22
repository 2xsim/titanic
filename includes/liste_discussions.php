<?php
    while ($row = mysqli_fetch_assoc($resultat)) {
        if(empty($row['photo_de_profil'])){
            $pp = "../img/male.jpg";
        } else {
            $pp =$row['photo_de_profil'];
        }
        
        if (!empty($row['statut'])) {
            $statut = '<i class="fas fa-circle text-success"></i>';
        } else {
            $statut = '';
        }
        
        $request2 = "SELECT * FROM messagerie WHERE (pseudo_to = '".$row['pseudo']."' OR pseudo_from = '".$row['pseudo']."') AND (pseudo_from = '$current_user_pseudo' OR pseudo_to = '$current_user_pseudo') ORDER BY id_message DESC LIMIT 1";
        $resultat2 = mysqli_query($chConnect, $request2);
        $row2 = mysqli_fetch_assoc($resultat2);

        //$tamp = $row2['message'] ;
        (mysqli_num_rows($resultat2) > 0) ? $tamp = $row2['corps_message'] : $tamp ="Aucun message";
        
        (strlen($tamp) > 28) ? $message =  substr($tamp, 0, 28) . '...' : $message = $tamp;
        if(isset($row2['pseudo_from'])){
            ($current_user_pseudo == $row2['pseudo_from']) ? $you = "Vous: " : $you = "";
        }else{
            $you = "";
        }
        
        $output .= "
                    <a href='?page=chat&pseudo_interlocuteur=".$row['pseudo']."' class='list-group-item list-group-item-action list-group-item-light rounded-0'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0'><img
                                    src='./uploads/".$pp."'
                                    alt='user' width='50' class='rounded-circle' /></div>
                            <div class='flex-grow-1 ms-4'>
                                <div class='d-flex align-items-center justify-content-between mb-3'>
                                    <h6 class='mb-0'>".$row['nom']." ".$row['prenoms']."</h6>
                                    <small class='small font-weight-bold'>".$statut."</small>
                                </div>
                                <p class='font-italic text-muted mb-0 text-small'>
                                ". $you . $message ."
                                </p>
                            </div>
                        </div>
                    </a>" ;
    }
?>