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
                <a href="test.html">
                    <figure>
                        <img src="./rRoom1.jpg" alt="">
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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo facilis incidunt commodi tempora doloremque. Alias beatae, quidem deserunt quas id nisi nostrum molestias libero eius!
                        </p>
                    </article>
                </a>
                <a href="test.html">
                    <figure>
                        <img src="./rRoom1.jpg" alt="">
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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo facilis incidunt commodi tempora doloremque. Alias beatae, quidem deserunt quas id nisi nostrum molestias libero eius!
                        </p>
                    </article>
                </a>
                <a href="test.html">
                    <figure>
                        <img src="./rRoom1.jpg" alt="">
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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo facilis incidunt commodi tempora doloremque. Alias beatae, quidem deserunt quas id nisi nostrum molestias libero eius!
                        </p>
                    </article>
                </a>
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