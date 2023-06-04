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

        static function HeaderNav($location,$name="name",$star="0",$logged){
            $HeaderNav = '
            <header class="head">
                <nav>
                    <figure>
                        <img src="../header/inc/img/logo.png" alt="logo">
                        <figcaption>
                            <h3>
                                Van  
                                <span>Booking</span>
                            </h3>
                        </figcaption>
                    </figure>
                    <ul>

                        <li><a href="../home/">HOME</a></li>
                        <li><a href="../home#specialOffer">SPECIAL OFFER</a></li>
                        <aside class="log">';
                        if($logged) {
                            $HeaderNav.='<li><a href="#">PROFILE</a></li>
                            <li><a href="../home/?session=out">Sign Out</a></li>';
                        }else {
                            $HeaderNav.='<li><a href="../login/login.php">SIGN IN</a></li>
                            <li><a href="../signUp/">SIGN UP</a></li>';
                        }
                        $HeaderNav.='
                        </aside>
                    </ul>
                    
                    <details>
                        <summary class="fa-solid fa-bars"></summary>
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">SPECIAL OFFER</a></li>
                            <aside>';
                            if($logged) {
                                $HeaderNav.='<li><a href="#">PROFILE</a></li>';
                            }else {
                                $HeaderNav.='<li><a href="#">SIGN IN</a></li>
                                <li><a href="#">SIGN UP</a></li>';

                            };

                            $HeaderNav.='</aside>
                        </ul>
                    </details>
                </nav>';
                if($location!="Home") {
                    $HeaderNav.='                <section class="headbg">
                    <section>
                        <h2>'.
                            $name.'
                        </h2>
                        <h3><i class="fa-solid fa-star"></i> '.$star.'
                            
                        </h3>
                        
                    </section>
                </section>';
                }
                $HeaderNav.='</header>';
            
            return $HeaderNav;
        }
    }
