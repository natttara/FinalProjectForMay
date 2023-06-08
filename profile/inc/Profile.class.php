<?php
    class Profile {
        static function headPage(){
            $htmlHead = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Homepage</title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
            </head>
            <body class="pBody">
            ';
            return $htmlHead;
        }
                             
        static function mainContent($user,$acmlist,$reservations,$allAcc,$trips){
            $profileP="";
            if($_SESSION['type']=='user') {
                if($user->PICTURE == ""){
                    $profileP  = "http://i.imgur.com/uc5X9Lc.png";
                }
                $profileP = $user->PICTURE;
            }else{
                if($user->HOST_PICTURE == ""){
                    $profileP = "http://i.imgur.com/uc5X9Lc.png";
                }  
                $profileP = $user->HOST_PICTURE;
            }

            $htmlMain = '
            <main class="profile">
                <section class="pleft">
                    <figure>
                        <form action="#" method="post" class="eForm">
                            <input type="hidden" name="erase" value="pic">
                            <input type="submit" value="DELETE PICTURE">
                        </form>
                        <img src="'.$profileP.'" alt="profile">
                        <figcaption>
                            <form action="#" method="post" class="fForm" enctype="multipart/form-data">
                                <input type="file" name="upfile" value="picture" required>
                                <input type="submit" value="UPLOAD">
                            </form>
                            <article class="underline">
                                <h2>'.$_SESSION['name'].'
                                </h2>
                            </article>
                            <aside>
                                <strong>
                                    Email :
                                </strong>
                                <a href = "mailto:">'.$_SESSION['username'].'</a>
                            </aside>
                            <aside>
                                <aside>
                                    <strong>
                                        Password :
                                        ********
                                    </strong>
                            </aside>
                        </figcaption>
                    </figure>
                    <article class="leftchoice">
                        <aside>
                            <i class="fa-solid fa-user"></i>
                            <a href="#">MY ACCOUNT</a>
                        </aside>
                        <aside>
                            <i class="fa-solid fa-bed"></i>
                            <a href="#">MY RESERVATION</a>
                        </aside>
                        <aside>
                            <i class="fa-solid fa-heart"></i>
                            <a href="#">WISH LIST</a>
                        </aside>
                        <aside>
                            <i class="fa-solid fa-suitcase-rolling"></i>
                            <a href="#">TRIP</a>
                        </aside>
                    </article>
                </section>
                <!-- left section END -->
                <!-- Right section -->
                <section class="pright">';
                    if($_SESSION['type']=='user') {
                        $htmlMain.='<section class="wishList">
                        <aside>
                            <h3>WISH LIST</h3>
                        </aside>
                        <ul>';
                        foreach($acmlist as $acm){
                            $htmlMain .= self::wishListRoom($acm);
                        }
                        $htmlMain .= 
                    '</ul>
                </section>';
                    }
                if($_SESSION['type']=='host') {
                    $htmlMain .='<section class="Reservations">
                    <aside>
                    <h3>Requests</h3>
                    </aside>
                    <section class="requests">';
                    foreach($reservations as $reserve){
                        $htmlMain .='<figure>
                        <img src="'.$reserve->PICTURE.'" >
                        
                        <figcaption>
                        <p><strong>'.$reserve->USER_NAME.'</strong></p> <p>Would like to stay in <strong>'.$reserve->NAME.'</strong></p>
                        <p>From <span class="gold">'.$reserve->CHECK_IN.'</span> to <span class="gold">'.$reserve->CHECK_OUT.'
                       </span>.
                       <p>Do you accept the request for the stay?</p>
                       <form method="POST">
                       <aside class="accept">
                       <input type="radio" id="acceptation" name="acceptation" value="Yes">
                       <p class="yes">Yes</p>
                       <input type="radio" id="acceptation" name="acceptation" value="No">
                       <p class="no">No</p>
                       <input hidden id="reservation" name="reservation" type="text" value="'.$reserve->ID_RESERVATION.'">
                       <button class="send">Send</button>
                       </aside>
                       </form>
                       </figcaption>
    
                        </figure>';
                    }
                    $htmlMain .='
                    </section>';
                 
                    
                    $htmlMain .='</section>
                    <section class="allAcc">
                    <aside>
                    <h3>Your Places</h3>
                    </aside>';
                   
                        // 
                        // <img src="'.$acc->NAME.'" >
                        foreach($allAcc as $acc){
                            $htmlMain .='
                            <a href="../description/?accommodation_id='.$acc->ID_ACCOMMODATION.'">
                            <figure>
                            <img src="'.$acc->PICTURE.'" >
                            <figcaption>
                            <p><strong>'.$acc->NAME.'</strong></p>
                            <p>'.$acc->NEIGHBOURHOOD.'</p>
                            <p>'.$acc->ROOM_TYPE.'</p>
                            <p>'.$acc->BEDS.' Bedrooms</p>
                            <p><i class="fa-solid fa-star"></i> '.$acc->REVIEWS.'</p>

                           <aside class="accept">
                           </aside>
                           </figcaption>
                            </figure>
                            </a>'
                            ;

                        }
                        
                
                }else {
                    $htmlMain .='<section class="trips">
                    <aside>
                    <h3>My Trips</h3>
                    </aside>';

                    if($trips){
                        foreach($trips as $trip){
                            $htmlMain .='
                            <figure>
                            <img src="'.$trip->PICTURE.'">
                            <figcaption>
                            <h5>Reservation ID:   #'.$trip->ID_RESERVATION.'</h5>
                            <p>'.$trip->NAME.'</p>
                            <p><span class="gold">From: </span> '.$trip->CHECK_IN.'</p>
                            <p><span class="gold">To: </span> '.$trip->CHECK_OUT.'</p>
                            <p><span class="gold">Host by: </span>  '.$trip->HOST_NAME.'</p>
                            </figcaption>
                            </figure>';
                        }
                    }else {
                        $htmlMain.="<p>You don't have any trips yet";
                    }
                
                }
                $htmlMain .='
                </section>
            </main>
            ';
            return $htmlMain;
        }

        static function wishListRoom($acm){
            if($acm->SPECIAL_OFFER==1) {
                $price = '<h4 class="rPrice"><div class="shiver"><del>$'. $acm->PRICE_PER_NIGHT.'</del></div>'.$acm->NEW_PRICE.' CAD /Night</h4>';
            }else {
                $price = '<h4 class="rPrice">'.$acm->PRICE_PER_NIGHT.' CAD /Night</h4>';
            }
            $htmlWLRoom = '
            <li>
                <a href="../description/?accommodation_id='.$acm->ID_ACCOMMODATION.'">
                    <figure>
                        <img src="'.$acm->PICTURE.'">
                        <figcaption>
                            <span>'
                                .$price.
                            '</span>
                        </figcaption>
                    </figure>
                    <article>
                        <h3>'.$acm->NAME.'</h3>
                        <h4>'.$acm->NEIGHBOURHOOD.'</h4>
                        <aside>        
                            <i class="fa-solid fa-person-half-dress"></i>
                            <h4>'.$acm->MAX_GUESTS.'</h4>
                            <form action="#" class="dForm" method="post">
                                <input type="hidden" name="delete" value="'.$acm->ID_ACCOMMODATION.'">
                                <input type="submit" value="Remove">
                            </form>
                        </aside>
                    </article>
                </a>
            </li>';
            return $htmlWLRoom;
        }

        static function endPage(){
            $htmlEnd = '
                </body>
            </html>
            ';
            return $htmlEnd;
        }
        
    }