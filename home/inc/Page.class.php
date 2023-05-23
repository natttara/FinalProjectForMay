<?php
    class Page {
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

        static function mainContent(){
            $mainContent = '<main class="home">';
            $mainContent .= self::formRow();
            $mainContent .= self::destinationRow();
            $mainContent .= self::offerRow();
            $mainContent .= '</main>';

            return $mainContent;
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
                                <option value="vancouver">Vancouver</option>
                                <option value="burnaby">Burnaby</option>
                                <option value="richmond">Richmond</option>
                                <option value="northVancouver">North Vancouver</option>
                                <option value="westVancouver">West Vancouver</option>
                            </select>
                        </aside>
                        <aside class="hPeople">
                            <label for="">People:</label>
                            <section>
                                <article>
                                    <label for="adult">Adult:</label>
                                    <section>
                                        <button>−</button>
                                        <input type="number" name="adult" id="adult">
                                        <button>+</button>
                                    </section>
                                </article>
                                <article>
                                    <label for="child">Child <span>(Under 12):</span></label>
                                    <section>
                                        <button>−</button>
                                        <input type="number" name="child" id="child">
                                        <button>+</button>
                                    </section>
                                </article>
                            </section>
                        </aside>
                        <input type="submit" value="Search">
                    </form>
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
                    <p>Find your best place in Vancouver!</p>
                </article>
                <section>
                    <button><i class="fa-solid fa-chevron-left"></i></button>
                    <section>
                        <aside class="hVancouver">
                            <figure>
                                <img src="./hDowntown.jpg" alt="vancouver">
                                <figcaption>
                                    <h3>Downtown</h3>
                                    <input type="button" value="Go">
                                </figcaption>
                            </figure>
                            <article>
                                <h2>1</h2>
                                <h3>Vancouver</h3>
                            </article>
                        </aside>
                        <aside class="hBurnaby">
                            <figure>
                                <img src="./hMetropolis.jpg" alt="burnaby">
                                <figcaption>
                                    <h3>Metropolis at Metrotown</h3>
                                    <input type="button" value="Go">
                                </figcaption>
                            </figure>
                            <article>
                                <h2>2</h2>
                                <h3>Burnaby</h3>
                            </article>
                        </aside>
                        <aside class="hRichmond">
                            <figure>
                                <img src="./hMcarthur.jpg" alt="richmond">
                                <figcaption>
                                    <h3>McArthurGlen Designer Outlet</h3>
                                    <input type="button" value="Go">
                                </figcaption>
                            </figure>
                            <article>
                                <h2>3</h2>
                                <h3>Richmond</h3>
                            </article>
                        </aside>
                        <aside class="hNVancouver">
                            <figure>
                                <img src="./hNVancouver.jpg" alt="nVancouver">
                                <figcaption>
                                    <h3>Lynn Canyon</h3>
                                    <input type="button" value="Go">
                                </figcaption>
                            </figure>
                            <article>
                                <h2>4</h2>
                                <h3>North Vancouver</h3>
                            </article>
                        </aside>
                        <aside class="hWVancouver">
                            <figure>
                                <img src="./hWVancouver.jpg" alt="wVancouver">
                                <figcaption>
                                    <h3>Cypress Mountain</h3>
                                    <input type="button" value="Go">
                                </figcaption>
                            </figure>
                            <article>
                                <h2>5</h2>
                                <h3>West Vancouver</h3>
                            </article>
                        </aside>
                    </section>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </section>
            </section>
            ';
            return $destination;
        }

        static function offerRow(){
            $offer = '
            <section class="specialOffer">
                <article>
                    <h2>Special Offers</h2>
                    <p>These rooms are offered at a special price.</p>
                </article>
                <section>
                    <button><i class="fa-solid fa-chevron-left"></i></button>
                    <section>
                        <a href="#" class="hSpe1">
                            <figure>
                                <img src="./hRoom1.jpg" alt="">
                                <figcaption>
                                    <span>
                                        <h4>100 CAD per night</h4>
                                    </span>
                                    <i class="fa-solid fa-draw-polygon"></i>
                                </figcaption>
                            </figure>
                            <article>
                                <h3>NameNameName</h3>
                                <section>
                                    <h4 class="rCity">North Vancouver</h4>
                                    <aside>
                                        <i class="fa-solid fa-bed"></i>
                                        <h4 class="rBed">2</h4>
                                    </aside>
                                    <aside>
                                        <i class="fa-solid fa-person-half-dress"></i>
                                        <h4 class="rPeople">4</h4>
                                    </aside>
                                </section>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo facilis incidunt commodi tempora doloremque!
                                </p>
                            </article>
                        </a>
                        <a href="#" class="hSpe2">
                            <figure>
                                <img src="./hRoom1.jpg" alt="">
                                <figcaption>
                                    <span>
                                        <h4>100 CAD per night</h4>
                                    </span>
                                    <i class="fa-solid fa-draw-polygon"></i>
                                </figcaption>
                            </figure>
                            <article>
                                <h3>NameNameName</h3>
                                <section>
                                    <h4 class="rCity">North Vancouver</h4>
                                    <aside>
                                        <i class="fa-solid fa-bed"></i>
                                        <h4 class="rBed">2</h4>
                                    </aside>
                                    <aside>
                                        <i class="fa-solid fa-person-half-dress"></i>
                                        <h4 class="rPeople">4</h4>
                                    </aside>
                                </section>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabue! Lorem ipsum dolor sit amet.
                                </p>
                            </article>
                        </a>
                        <a href="#" class="hSpe3">
                            <figure>
                                <img src="./hRoom1.jpg" alt="">
                                <figcaption>
                                    <span>
                                        <h4>100 CAD per night</h4>
                                    </span>
                                    <i class="fa-solid fa-draw-polygon"></i>
                                </figcaption>
                            </figure>
                            <article>
                                <h3>NameNameName</h3>
                                <section>
                                    <h4 class="rCity">North Vancouver</h4>
                                    <aside>
                                        <i class="fa-solid fa-bed"></i>
                                        <h4 class="rBed">2</h4>
                                    </aside>
                                    <aside>
                                        <i class="fa-solid fa-person-half-dress"></i>
                                        <h4 class="rPeople">4</h4>
                                    </aside>
                                </section>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo facilis incidunt commodi tempora doloremque!
                                </p>
                            </article>
                        </a>
                    </section>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </section>
            </section>
            ';
            return $offer;
        }

        static function pageEnd(){
            $htmlEnd = '
            </body>
            </html>
            ';
            return $htmlEnd;
        }
    }