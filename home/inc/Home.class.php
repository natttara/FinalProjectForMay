<?php
    class Home {
        static function pageHead(){
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
            <body>
            ';
            return $htmlHead;
        }

        static function mainContent($acmList){
            $mainContent = '<main class="home">';
            $mainContent .= self::formRow();
            $mainContent .= self::destinationRow();
            $mainContent .= self::offerRow($acmList);
            $mainContent .= '</main>';

            return $mainContent;
        }

        static function formRow(){
            $form = '
            <section class="hForm">
                <section class="hLayer">
                    <form action="../result/">
                        <aside>
                            <label for="checkIn">Check In:</label>
                            <input type="date" name="checkIn" id="checkIn">
                        </aside>
                        <aside>
                            <label for="checkOut">Check Out:</label>
                            <input type="date" name="checkOut" id="checkOut">
                        </aside>
                        <aside class="hLocation">
                            <label for="location">Location:</label>
                            <select name="location" id="hLocation" multiple>
                                <option selected value="All Vancouver">All Vancouver</option>
                                <option value="West End">West End</option>
                                <option value="Kensington-Cedar Cottage">Kensington-Cedar Cottage</option>
                                <option value="Downtown Eastside">Downtown Eastside</option>
                                <option value="Hastings Sunrise">Hastings Sunrise</option>
                                <option value="Grandview-Woodland">Grandview-Woodland</option>
                                <option value="Renfrew-Collingwood">Renfrew-Collingwood</option>
                                <option value="Mount Pleasant">Mount Pleasant</option>
                                <option value="Kitsilano">Kitsilano</option>
                                <option value="Downtown">Downtown</option>
                                <option value="Riley Park">Riley Park</option>
                                <option value="Arbutus Ridge">Arbutus Ridge</option>
                                <option value="Dunbar Southlands">Dunbar Southlands</option>
                                <option value="Killarney">Killarney</option>
                                <option value="South Cambie">South Cambie</option>
                                <option value="Fairview">Fairview</option>
                                <option value="West Point Grey">West Point Grey</option>
                                <option value="Strathcona">Strathcona</option>
                                <option value="Sunset">Sunset</option>
                                <option value="Kerrisdale">Kerrisdale</option>
                                <option value="Victoria-Fraserview">Victoria-Fraserview</option>
                                <option value="Marpole">Marpole</option>
                                <option value="Shaughnessy">Shaughnessy</option>
                                <option value="Oakridge">Oakridge</option>
                            </select>
                        </aside>
                        <aside class="hPeople">
                            <label for="guest">Guests:</label>
                            <input type="number" name="guest" id="guest">
                        </aside>
                        <input type="submit" value="Search">
                    </form>
                    <figure class="accordion">
                        <input type="checkbox" id="hMap">
                        <label for="hMap">Vancouver Map <i class="fa-solid fa-chevron-down"></i></label>
                        <img src="./inc/img/hMap.jpg" alt="">
                    </figure>
                </section>
            </section>
            ';
            return $form;
        }

        static function destinationRow(){
            $destination = '
            <section class="hDestination">
                <article>
                    <h2>Destinations</h2>
                    <p>Find your best place in Vancouver! Check out the popular ones!</p>
                </article>
                <section>
                    <aside class="hFairview">
                        <figure>
                            <img src="./inc/img/hGranvilleIsland.jpg" alt="">
                            <figcaption>
                                <h3>Granville Island</h3>
                                <a href="../result/?checkIn=&checkOut=&location=Fairview&guest=">Go</a>
                            </figcaption>
                        </figure>
                        <article>
                            <h2>1</h2>
                            <h3>Fairview</h3>
                        </article>
                    </aside>
                    <aside class="hWestEnd">
                        <figure>
                            <img src="./inc/img/hStanleyPark.jpg" alt="stanleyPark">
                            <figcaption>
                                <h3>Stanley Park</h3>
                                <a href="../result/?checkIn=&checkOut=&location=West+End&guest=">Go</a>
                            </figcaption>
                        </figure>
                        <article>
                            <h2>2</h2>
                            <h3>West End</h3>
                        </article>
                    </aside>
                    <aside class="hMountPleasant">
                        <figure>
                            <img src="./inc/img/hScienceWorld.jpg" alt="scienceWorld">
                            <figcaption>
                                <h3>Science World</h3>
                                <a href="../result/?checkIn=&checkOut=&location=Mount+PLeasant&guest=">Go</a>
                            </figcaption>
                        </figure>
                        <article>
                            <h2>3</h2>
                            <h3>Mount Pleasant</h3>
                        </article>
                    </aside>
                </section>
            </section>
            ';
            return $destination;
        }

        static function offerRow(array $acmList){
            $offerList = '
            <section id="specialOffer" class="specialOffer">
                <article>
                    <aside>
                        <h2>Special Offers</h2>
                        <p>These rooms are offered at a special price.</p>
                    </aside>
                    <ul>
                        <li><i class="fa-solid fa-house"></i>: Entire home/apt</li>
                        <li><i class="fa-solid fa-hotel"></i>: Hotel room</li>
                        <li><i class="fa-solid fa-person-shelter"></i>: Private room</li>
                        <li><i class="fa-solid fa-people-roof"></i>: Shared room</li>
                        <li><i class="fa-solid fa-person-half-dress"></i>: Number of guests</li>
                    </ul>
                </article>
                <section>';
            foreach($acmList as $acm){
                $offerList .= self::offerRoom($acm);
            }
            $offerList .= '
                </section>
            </section>
            ';
            return $offerList;
        }

        static function offerRoom($acm){

            //START: giving icon according to the room type
            $roomIcon = "";
            if($acm->ROOM_TYPE == "Entire home/apt"){
                $roomIcon = '<i class="fa-solid fa-house"></i>';
            }else if($acm->ROOM_TYPE == "Hotel room"){
                $roomIcon = '<i class="fa-solid fa-hotel"></i>';
            }else if($acm->ROOM_TYPE == "Private room"){
                $roomIcon = '<i class="fa-solid fa-person-shelter"></i>';
            }else if($acm->ROOM_TYPE == "Shared room"){
                $roomIcon = '<i class="fa-solid fa-people-roof"></i>';
            }
            //END: giving icon according to the room type
            
            $htmlRoom = '
            <a href="../description/?accommodation_id='.$acm->ID_ACCOMMODATION.'" class="rAcm">
                <figure>
                    <img class="rPicture" src="'.$acm->PICTURE.'">
                    <figcaption>
                        <span>
                            <h4 class="rPrice"><div class="shiver"><del>$'.$acm->PRICE_PER_NIGHT.'</del></div>  '.$acm->NEW_PRICE.' CAD /night</h4>
                        </span>
                    </figcaption>
                </figure>
                <article>
                    <h3>'.$acm->NAME.'</h3>
                    <h4 class="rPlace">'.'Location: '.$acm->NEIGHBOURHOOD.'</h4>
                    <section>'.
                    $roomIcon
                        .'<aside>
                            <i id="rType" class="fa-solid fa-person-half-dress"></i>
                            <h4 class="rPeople">'.$acm->MAX_GUESTS.'</h4>
                        </aside>
                    </section>
                    <span class="rHost"><h5 class="hostName">Host: '.$acm->HOST_NAME.'</h5></span>
                </article>
            </a>
            ';
   
            return $htmlRoom;
        }

        static function pageEnd(){
            $htmlEnd = '
                </body>
            </html>
            ';
            return $htmlEnd;
        }
    }