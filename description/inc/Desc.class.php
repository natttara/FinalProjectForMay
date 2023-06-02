<?php

    class Desc {
        
       

        public static function body($acc,$amenities,$reviews) : string{

            $body = '
            <section class="container">
            <section class="body-desc">
            <section class="gallery">
                <img class="banner" src="'.$acc->PICTURE.'" alt="pic">
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
                            <span><i class="fa-solid fa-map"></i>Neighbourhood: '.$acc->NEIGHBOURHOOD.'   </span>
                            <span><i class="fa-regular fa-user"></i>Maximum Guests: '. $acc->MAX_GUESTS.'</span>
                            <span><i class="fa-solid fa-bed"></i>Room Type: '. $acc->ROOM_TYPE.'  </span>
                        </aside>
                        <aside>
                            <span>From: ';
                            if($acc->SPECIAL_OFFER==1) {
                                $body.='<span class="number"><del>$'. $acc->PRICE_PER_NIGHT.'</del><span> $'.$acc->NEW_PRICE.'</span></span>';
                            }else {
                                $body.='<span class="number">$'. $acc->PRICE_PER_NIGHT.'</span>';
                            }
                            
                            $body.=' /Night</span>           
                        </aside>
                    </aside>

                    <article class="description">
                        '. $acc->DESCRIPTION.'
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
                        '<h3>'.$reviews[$i]->REVIEWER_NAME.'</h3>'.
                        '<p>'.$reviews[$i]->COMMENT.'</p>'.
                        '</figcaption>'.
                        '</figure>';
                    }
                    $body.='
                    </article>
                </article>
                <article class="right">
                    <section class="top">
                        <aside class="block">
                            <p>CHECK - IN</p>
                            <span>18</span>
                            <p>Jan, 2019 - Saturday</p>
                            <button>CHANGE</button>
                        </aside>
                        <aside class="block">
                            <p>CHECK - OUT</p>
                            <span>21</span>
                            <p>Feb, 2019 - Tuesday</p>
                            <button>CHANGE</button>
                        </aside>
                    </section>
                    <section class="bottom">
                        <aside class="block">
                            <p>GUESTS</p>
                            <span>3</span>
                        </aside>
                        <aside class="block">
                            <p>Nights</p>
                            <span>4</span>
                        </aside>
                    </section>
                    <button>BOOK NOW</button>
                    <h4>The Host</h4>
                    <article class="profile-user">
                    <figure>
                    <img class="circle" src="' .$acc->HOST_PICTURE.'" alt="img-1">
                    </figure>
                    <p>'.$acc->HOST_NAME.'</p>
                     </article>
                </article>
            </section>
            </section>
        </section>';
        return $body;

        }
   }
    