<?php

    class Desc {

        public static function body() : string{
            $body = '<section class="body-desc">
            <section class="gallery">
                <img class="banner" src="./inc/img/img-1.jpg" alt="">
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
                            <span><i class="fa-solid fa-map"></i>Acreage: 20ft</span>
                            <span><i class="fa-regular fa-user"></i>Guests: 5</span>
                            <span><i class="fa-solid fa-bed"></i>Bed: 2</span>
                        </aside>
                        <aside>
                            <span>From: <span class="number">$120</span>/DAYS</span>           
                        </aside>
                    </aside>
                    <article class="description">
                        <strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error quo fugiat eveniet, velit dicta cupiditate alias! Sunt impedit quasi suscipit.</strong>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum accusantium voluptas sunt accusamus nihil natus similique debitis aut, modi autem qui ratione? Neque ipsa ducimus delectus consectetur voluptatibus odio libero explicabo deserunt fugiat obcaecati rerum praesentium maiores facilis quasi, nesciunt id tempora nisi, vitae itaque non perferendis. Autem, voluptatem dolorum.</p>
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
                </article>
            </section>
        </section>';
        return $body;

        }
   }
    