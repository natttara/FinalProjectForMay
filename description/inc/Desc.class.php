<?php

    class Desc {

        public static function body($title,$neighbourhood,$type, $guests,$price,$description,$picture,$host_picture,$host_name) : string{
            $body = '
            <section class="container">
            <section class="body-desc">
            <h1 style="text-align:center; font-size:30px">'. $title.' </h1>
            <section class="gallery">
                <img class="banner" src="'.$picture.'" alt="pic">
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
                            <span><i class="fa-solid fa-map"></i>Neighbourhood: '.$neighbourhood.'   </span>
                            <span><i class="fa-regular fa-user"></i>Maximum Guests: '. $guests.'</span>
                            <span><i class="fa-solid fa-bed"></i>Room Type: '. $type.'  </span>
                        </aside>
                        <aside>
                            <span>From: <span class="number">$'. $price.'</span>/Night</span>           
                        </aside>
                    </aside>

                    <article class="description">
                        '. $description .'
                        <aside class="amenities">
                        <span><i class="fa-solid fa-tv"></i>   Amenities</span>
                            <ul>
                                <li>Refrigerator and water</li>
                                <li>Hairdryer and iron</li>
                                <li>Washer</li>
                                <li>Dryer</li>
                            </ul>
                        </aside>

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
                    <img class="circle" src="' .$host_picture.'" alt="img-1">
                    </figure>
                    <p>'.$host_name.'</p>
                     </article>
                </article>
            </section>
            </section>
        </section>';
        return $body;

        }
   }
    