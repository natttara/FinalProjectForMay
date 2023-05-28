<?php
    class Result {
        static function pageHead(){
            $htmlHead = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>House List</title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
            </head>
            <body>
            ';
            return $htmlHead;
        }

        static function mainContent(){
            $htmlMain = '<main class="result">';
            $htmlMain .= self::formRow();
            $htmlMain .= self::titleRow();
            $htmlMain .= self::listRow();
            $htmlMain .= self::toTopRow();
            $htmlMain .= '</main>';

            return $htmlMain;
        }

        static function formRow(){
            $form = '
            <section class="hForm">
                <section class="hLayer">
                    <form action="#">
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
                                <option disabled >Ctrl+click for multiple select!</option>
                                <option value="westEnd">West End</option>
                                <option value="k-cCottage">Kensington-Cedar Cottage</option>
                                <option value="dtEast">Downtown Eastside</option>
                                <option value="hastings-sunrise">Hastings Sunrise</option>
                                <option value="grandview-woodland">Grandview-Woodland</option>
                                <option value="renfrew-collingwood">Renfrew-Collingwood</option>
                                <option value="mountPleasant">Mount Pleasant</option>
                                <option value="kitsilano">Kitsilano</option>
                                <option value="downtown">Downtown</option>
                                <option value="rileyPark">Riley Park</option>
                                <option value="arbutusRidge">Arbutus Ridge</option>
                                <option value="dunbarSouthlands">Dunbar Southlands</option>
                                <option value="killarney">Killarney</option>
                                <option value="southCambie">South Cambie</option>
                                <option value="fairview">Fairview</option>
                                <option value="westPointGrey">West Point Grey</option>
                                <option value="strathcona">Strathcona</option>
                                <option value="sunset">Sunset</option>
                                <option value="kerrisdale">Kerrisdale</option>
                                <option value="victoria-fraserview">Victoria-Fraserview</option>
                                <option value="marpole">Marpole</option>
                                <option value="shaughnessy">Shaughnessy</option>
                                <option value="oakridge">Oakridge</option>
                            </select>
                        </aside>
                        <aside class="hPeople">
                            <label for="">Guests:</label>
                            <input type="number" name="adult" id="adult">
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

        static function titleRow(){
            $title = '
            <aside class="rTitle">
                <h2>Rooms in:</h2>
                <h2 class="rLocation">All Vancouver</h2>
                <!-- this part changes due to the selected places -->
            </aside>
            ';
            return $title;
        }

        static function listRow(){
            $list = '
            <section class="rList">
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
                <section>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>蘑菇小屋提供单独出入的私人空间，无需与房东共享任何设施，单独的卧室，单独的洗手间，还有完整的厨房</h3>
                            <h4 class="rPlace">kensington-cedar cottage</h4>
                            <section>
                                <i class="fa-solid fa-house"></i>
                                <aside>
                                    <i id="rType" class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">Host: Level Hotels And Furnished Suites</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPrice" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>Home</h3>
                            <h4 class="rPlace">sunset</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-person-shelter"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">K</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                    <a href="#">
                        <figure>
                            <img class="rPicture" src="./inc/img/rRoom1.jpg" alt="">
                            <figcaption>
                                <span>
                                    <h4 class="rPrice">100 CAD per night</h4>
                                </span>
                                <i class="fa-solid fa-draw-polygon"></i>
                            </figcaption>
                        </figure>
                        <article>
                            <h3>NameNameName</h3>
                            <h4 class="rPlace">placeplaceplace</h4>
                            <section>
                                <aside>
                                    <i id="rType" class="fa-solid fa-hotel"></i>
                                </aside>
                                <aside>
                                    <i class="fa-solid fa-person-half-dress"></i>
                                    <h4 class="rPeople">2</h4>
                                </aside>
                            </section>
                            <span class="rHost"><h5>Host:</h5> <h5 class="hostName">hostnamehostname</h5></span>
                        </article>
                    </a>
                </section>
            </section>
            ';
            return $list;
        }

        static function toTopRow(){
            $toTop = '
            <aside class="rToTop">
                <a href="#">
                    <h3>Go to Top</h3>
                </a>
                <!-- jump to header -->
            </aside>
            ';
            return $toTop;
        }

        static function pageEnd(){
            $htmlEnd = '
            </body>
            </html>
            ';
            return $htmlEnd;
        }
    }