<?php

    class Desc {
        
       

        public static function body($acc,$amenities,$reviews,$logged,$id) : string{

            if($logged){
                $wish = '
                <form action="#" class="wForm">
                    <input type="hidden" name="accommodation_id" value="'.$id.'">
                    <input type="hidden" name="wish" value="true">
                    <input type="submit" value="Add to wishlist">
                </form>';

                $booking = '
                <form method="POST">
                <section class="top">
                <aside class="block">
                    <p>CHECK - IN</p>
                    <input name="checkIn" type=date required>
                </aside>
                <aside class="block">
                    <p>CHECK - OUT</p>
                    <input name="checkOut" type=date required>
                </aside>
            </section>
            <section class="bottom">
                <aside class="block">
                    <p>GUESTS</p>
                    <input name="guests" type=number required>
                </aside>
            </section>
            <button class="buttonB">BOOK NOW</button>
            </form>'
            ;
            }else {
                $wish = "";
                $booking='<section class="not-logged">
                <p>You need to sign in to book a room</p>
                <a href="../login/login.php">Sign In</a>
                </section>
                ';
            }
            $body = '
            <section class="container">
            <section class="body-desc">
            <section class="gallery">
                <img class="banner" src="'.$acc->getPicture().'" alt="pic">
                <figure>
                    <img src="./inc/img/img-2.jpg" alt="img-1">
                    <img src="./inc/img/img-3.jpg" alt="img-2">
                    <img src="./inc/img/img-4.jpg" alt="img-3">
                    <img src="./inc/img/img-5.jpg" alt="img-4">
                </figure>
            </section>
            <section class="main-content">
                <article class="left">
                    <aside class="info-banner">
                        <aside class="icons">
                            <span><i class="fa-solid fa-map"></i>Neighbourhood: '.$acc->getNeighbourhood().'   </span>
                            <span><i class="fa-regular fa-user"></i>Maximum Guests: '. $acc->getGuests().'</span>
                            <span><i class="fa-solid fa-bed"></i>Room Type: '. $acc->getType().'  </span>
                        </aside>
                        <aside>
                            <span>From: ';
                            if($acc->getSpecial()==1) {
                                $body.='<span class="number"><del>$'. $acc->getPrice().'</del><span> $'.$acc->NEW_PRICE.'</span></span>';
                            }else {
                                $body.='<span class="number">$'. $acc->getPrice().'</span>';
                            }
                            
                            $body.=' /Night</span>           
                        </aside>
                    </aside>

                    <article class="description">
                        '. $acc->getDescription().'
                        <aside class="amenities">
                        <span><i class="fa-solid fa-tv"></i>   Amenities</span>
                            <ul>';
                              for ($i=0; $i <count($amenities) ; $i++) { 
                                $body.= '<li>'.$amenities[$i].'</li>';
                              }
                              $body.='</ul>
                        </aside>
                    </article>
                    <article class="reviews">
                    <h2>Reviews </h2>';
                    for($i=0;$i<count($reviews);$i++) {
                        $body.='<figure>'.'<img src="./inc/img/user.png">'.'<figcaption>'.
                        '<h3>'.$reviews[$i]->getReviewer().'</h3>'.
                        '<p>'.$reviews[$i]->getComment().'</p>'.
                        '</figcaption>'.
                        '</figure>';
                    }
                    $body.='
                    </article>
                </article>
                <article class="right">'
                    .$booking
                    .$wish.
                    '<h4>The Host</h4>
                    <article class="profile-user">
                    <figure>
                    <img class="circle" src="' .$acc->getHostPicture().'" alt="img-1">
                    </figure>
                    <p>'.$acc->getHostName().'</p>
                     </article>
                </article>
            </section>
            </section>
        </section>';
        return $body;

        }

        public static function notFound(): string {
            $notFound='<section class="page-404">
            <h1>404 Not Found </h1>
            <img src="https://a0.muscache.com/airbnb/static/error_pages/404-Airbnb_final-d652ff855b1335dd3eedc3baa8dc8b69.gif">
            <p>The place you are trying to look does not exist...</p>
            </section>
            ';

            return $notFound;
        }
   }
    