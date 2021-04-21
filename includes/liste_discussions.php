<?php
    while ($row = mysqli_fetch_assoc($resultat)) {
        if(empty($row['photo_de_profil'])){
            $pp = "../img/male.jpg";
        } else {
            $pp =$row['photo_de_profil'];
        }
            
        $output .= "
                    <a href='acc_user.php?page=chat&pseudo_interlocuteur=".$row['pseudo']."' class='list-group-item list-group-item-action list-group-item-light rounded-0'>
                        <div class='d-flex'>
                            <div class='flex-shrink-0'><img
                                    src='./uploads/".$pp."'
                                    alt='user' width='50' class='rounded-circle' /></div>
                            <div class='flex-grow-1 ms-4'>
                                <div class='d-flex align-items-center justify-content-between mb-3'>
                                    <h6 class='mb-0'>".$row['nom']." ".$row['prenoms']."</h6>
                                    <small class='small font-weight-bold'>21 Aug</small>
                                </div>
                                <p class='font-italic text-muted mb-0 text-small'>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt
                                    ut labore.
                                </p>
                            </div>
                        </div>
                    </a>" ;
    }
?>