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

                                    // <?php echo $_SESSION['name']; 
        static function mainContent($user,$acmlist,$reservations){
            $htmlMain = '
            <main class="profile">
                <section class="pleft">
                    <figure>
                        <img src="../profile/img/profile.jpg" alt="profile">
                        <figcaption>
                            <article>
                                <h2>'.$_SESSION['name'].'
                                </h2>
                                <h5>
                                    <a href="#">
                                        CHANGE INFORMATION <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </h5>
                                <a href="#" class="fa-solid fa-envelope-dot"></a>
                            </article>
                            <aside>
                                <strong>
                                    Email :
                                </strong>
                                <a href = "mailto:">'.$_SESSION['username'].'</a>
                            </aside>
                            <aside>
                                <strong>
                                    Address :
                                </strong>
                                <address>
                                    8712 Garden Court 
                                </address>
                            </aside>
                            <aside>
                                <strong>
                                    Phone :
                                </strong>
                                <p>
                                    +1 768 454 0342
                                </p>
                            </aside>
                            <aside>
                                <strong>
                                    City :
                                </strong>
                                <address>
                                    Greenland
                                </address>
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
                <section class="pright">
                    <section class="status">
                        <aside>
                            <h4>
                                <i class="fa-solid fa-user"></i> Status:
                                <span>
                                    VIP Customer (Level 3)
                                </span>
                            </h4>
                        </aside>
                        <aside>
                            <h4>
                                <i class="fa-solid fa-star"></i> Ranking Points:
                                <span>
                                    1500 Points
                                </span>
                            </h4>
                        </aside>
                        <ul class="level">
                            <li>
                                <h6>
                                    <small>
                                        Level 3
                                    </small>
                                </h6>
                            </li>
                        </ul>
                        <aside class="bene">
                            <h3>
                                VIP benefits
                            </h3>
                            <p>
                                Level 1: Free Breakfast, Pool.<br>
                                Level 2: Free Bar, Free Wifi, Free Golf.<br>
                                Level 3: Free Spa, 10% Discount restaurant, Free Airport Transfer.<br>
                                Level 4: 20% Discount Book Room, Free All Service, Support 24/7, Free 3 Meals, Free Car Park
                            </p>
                            <h4>
                                <strong>
                                    <i class="fa-solid fa-triangle-exclamation" style="color: #ec0909;"></i> Attention:
                                </strong>
                                You will be able to accumulate the benefits of the lower landmark when leveling up higher.
                            </h4>
                        </aside>
                    </section>
                    <section class="passw">
                        <aside>
                            <h4>
                                Password 
                                ********
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">CHANGE PASSWORD</a>
                                </li>
                            </ul>
                        </aside>
                        <h6></h6>
                        <aside>
                            <h4>
                                Save My Credit Card Information
                            </h4>
                            <section class="onoff">
                                <label for="toggle-1" class="toggle-1">
                                    <input type="checkbox" name="toggle-1" id="toggle-1" class="toggle-1__input">
                                    <span class="toggle-1__button"></span>
                                </label>
                            </section>
                        </aside>
                        <!-- <aside>
                            <h4>
                                News
                            </h4>
                            <section>
                                <label for="chooseNews">Choose a :</label>
                                <select id="News">
                                    <option value="Daily">Daily</option>
                                    <option value="Twice a week">Twice a week</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Never">Never</option>
                                </select>
                            </section>
                        </aside>
                        <aside>
                            <h4>
                                I would like to receive about a promotion 
                            </h4>
                            <section class="onoff">
                                <label for="toggle-1" class="toggle-1">
                                    <input type="checkbox" name="toggle-1" id="toggle-1" class="toggle-1__input">
                                    <span class="toggle-1__button"></span>
                                </label>
                            </section>
                        </aside>
                        <aside>
                            <h4>
                                I would like to receive booking support reminders. 
                            </h4>
                            <section class="onoff">
                                <label for="toggle-1" class="toggle-1">
                                    <input type="checkbox" name="toggle-1" id="toggle-1" class="toggle-1__input">
                                    <span class="toggle-1__button"></span>
                                </label>
                            </section>
                        </aside> -->
                    </section>
                    <section class="wishList">
                    <aside>
                        <h3>WISH LIST</h3>
                    </aside>
                    <ul>';
            foreach($acmlist as $acm){
                $htmlMain .= self::wishListRoom($acm);
            }
            // $htmlMain .= self::wishListRoom($acm);
            $htmlMain .= 
                    '</ul>
                </section>';
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
                       <aside class="accept">
                       <p class="yes">Yes</p>
                       <p class="no">No</p>
                       </aside>
                       </figcaption>
    
                        </figure>';
                    }
                    $htmlMain .='
                    </section>
                    </section>';
                }else {
                    $htmlMain .='';
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
                <a href="#">
                    <figure>
                        <img src="'.$acm->PICTURE.'">
                        <figcaption>
                            <span>'
                                .$price.
                            '</span>
                            <i class="fa-solid fa-draw-polygon"></i>
                        </figcaption>
                    </figure>
                    <article>
                        <h3>'.$acm->NAME.'</h3>
                        <h4>'.$acm->NEIGHBOURHOOD.'</h4>
                        <aside>        
                            <i class="fa-solid fa-person-half-dress"></i>
                            <h4>'.$acm->MAX_GUESTS.'</h4>
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