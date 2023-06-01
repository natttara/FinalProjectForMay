<?php

    class Header {
        static function HeadPage(){
            $htmlHeadPage = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Homepage</title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            </head>
            <body>
            ';
            return $htmlHeadPage;
        }

        static function HeaderNav(){
            $HeaderNav = '
            <header class="head">
                <nav>
                    <figure>
                        <img src="./img/logo.png" alt="logo">
                        <figcaption>
                            <h3>
                                Van  
                                <span>Booking</span>
                            </h3>
                        </figcaption>
                    </figure>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SPECIAL OFFER</a></li>
                        <aside class="log">
                            <li><a href="#">SIGN IN</a></li>
                            <li><a href="#">SIGN UP</a></li>
                        </aside>
                    </ul>
                    
                    <details>
                        <summary class="fa-solid fa-bars"></summary>
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">SPECIAL OFFER</a></li>
                            <aside>
                                <li><a href="#">SIGN IN</a></li>
                                <li><a href="#">SIGN UP</a></li>
                            </aside>
                        </ul>
                    </details>
                </nav>
                <section class="headbg">
                    <section>
                        <h2>
                            VANCOUVER BOOKING
                        </h2>
                        <h5>
                            A BETTER WAY TO STAY
                        </h5>
                        <a href="#">
                            BOOK NOW
                        </a>
                        
                    </section>
                </section>
            </header>
            ';
            return $HeaderNav;
        }
    }
