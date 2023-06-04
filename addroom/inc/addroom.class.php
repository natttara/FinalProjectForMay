<?php

class addRoom {

    static function pageHead(){
        $htmlHeadPage ='

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form to add Room</title>
            <link rel="stylesheet" href="/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        </head>
        <body>

        ';
        return $htmlHeadPage;
    }

    static function detailBooking(){
        $htmlDetailBooking ='
        <main class="mainRoom">
            <section class="forAdd">
                <form action="add_room.php" method="POST" class="aroom">
                    <section class="form-group" id="top">
                        <h2 class="heading">Booking form & contact</h2>
                        <article>
                            <aside class="controls">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="floatLabel" name="name">
                            </aside>
                            <aside class="controls">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="floatLabel" name="email">
                            </aside>       
                            <aside class="controls">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" class="floatLabel" name="phone">
                            </aside>
                        </article>
                    </section>
                    <!--  Details -->
                    <section class="form-group" id="bottom">
                        <h2 class="heading">Details</h2>
                        <article class="grid" id="chkd">
                            <section class="col-1-4 col-1-4-sm">
                                <aside class="controls">
                                    <label for="chkin" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check In</label>
                                    <input type="date" id="chkin" class="floatLabel" name="chkin" value="<?php echo date('Y-m-d'); ?>">
                                </aside>      
                            </section>
                            <section class="col-1-4 col-1-4-sm">
                                <aside class="controls">
                                    <label for="chkout" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check out</label>
                                    <input type="date" id="chkout" class="floatLabel" name="chkout" value="<?php echo date('Y-m-d'); ?>" />
                                </aside>      
                            </section>
                        </article>
                        <article class="grid">
                            <section class="col-1-3 col-1-3-sm">
                                <aside class="controls">
                                    <label for="people"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
                                    <!-- <i class="fa fa-sort"></i> -->
                                    <select class="floatLabel">
                                        <option value="blank"></option>
                                        <option value="1">1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3">3</option>
                                    </select>
                                </aside>      
                            </section>
                            <section class="col-1-3 col-1-3-sm">
                                <aside class="controls">
                                    <label for="room">Room</label>
                                    <!-- <i class="fa fa-sort"></i> -->
                                    <select class="floatLabel">
                                        <option value="blank"></option>
                                        <option value="wbf" selected>With Breakfast</option>
                                        <option value="wobf">Without Breakfast</option>
                                    </select>
                                </aside>     
                            </section>
                            <section class="col-1-3 col-1-3-sm">
                                <aside class="controls">
                                    <label for="bed">Type of Bed</label>
                                    <!-- <i class="fa fa-sort"></i> -->
                                    <select class="floatLabel">
                                        <option value="blank"></option>
                                        <option value="single-bed">Single bed</option>
                                        <option value="double-bed">Double bed</option>
                                        <option value="queen-bed" selected>Queen size bed</option>
                                        <option value="king-bed">King size bed</option>
                                    </select>
                                </aside>     
                            </section>
                        </article>
                        <article class="grid" id="commentssec">
                            <p class="info-text">Please describe your needs e.g. Extra beds, children cots</p>
                            <aside class="controls" id="commentsbox">
                                <label for="comments">Comments</label>
                                <textarea name="comments" class="floatLabel" id="comments"></textarea>
                            </aside>
                            <button type="submit" value="Submit" class="col-1-4">Submit</button>
                        </article>  
                    </section> 
                </form>

            </section>
        </main>    

        ';
        return $htmlDetailBooking;

    }

    static function endPage(){
        $htmlEndPage = '
            </body>
        </html>
        ';
        return $htmlEndPage;
    }



}