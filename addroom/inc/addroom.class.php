<?php

class addRoom {

    public static function pageHead(){
        $htmlHeadPage ='

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form to add Room</title>
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        </head>
        <body>

        ';
        return $htmlHeadPage;
    }

    public static function detailBooking(){
        $htmlDetailBooking ='
            <main class="mainRoom">
                <section class="forAdd">
                    <form action="#" method="POST" class="aroom">
                        <section class="form-group" id="top">
                            <h2 class="heading">Add Room</h2>
                            <article>
                                <aside class="controls">
                                    <label for="name">Room Name</label>
                                    <input type="text" id="name" class="floatLabel" name="roomName">
                                </aside>
                                <aside class="controls">
                                    <label for="bed">Beds</label>
                                    <input type="number" id="bed" class="floatLabel" name="bed">
                                </aside> 
                                <aside class="controls">
                                    <label for="guest">Maximum guest</label>
                                    <input type="number" id="guest" class="floatLabel" name="guest">
                                </aside>  
                                <aside class="controls">
                                    <label for="price">Price per night (CAD)</label>
                                    <input type="number" id="price" class="floatLabel" name="price">
                                </aside>                         
                                <aside class="controls">
                                    <label for="rFile">Select pictures of the room file:</label>
                                    <input type="file" id="rFile" name="rFile" />
                                </aside>
                                <aside class="controls">
                                    <label for="hFile">Select a picture of the host file:</label>
                                    <input type="file" id="hFile" name="hFile" />
                                </aside>
                            </article>
                        </section>
                        <!--  Details -->
                        <section class="form-group" id="bottom">
                            <h2 class="heading">Details</h2>
                            <article class="grid">
                                <section class="col-1-3 col-1-3-sm">
                                    <aside class="controls">
                                        <label for="people"><i class="fa fa-male"></i>Type of room</label>
                                        <select class="floatLabel" name="selectRoom">
                                            <option value="Entire home/apt">Entire home/apt</option>
                                            <option value="Hotel room">Hotel room</option>
                                            <option value="Private room" selected>Private room</option>
                                            <option value="Shared room">Shared room</option>
                                        </select>
                                    </aside>      
                                </section>
                                <section class="col-1-3 col-1-3-sm">
                                    <aside class="controls">
                                        <label for="room">Location</label>
                                        <select class="floatLabel" name="place">
                                            <label for="location">Location:</label>
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
                                </section>
                            </article>
                            <article class="grid" id="commentssec">
                                <p class="info-text">Please describe your room details</p>
                                <aside class="controls" id="commentsbox">
                                    <label for="commentsD">Description</label>
                                    <textarea name="commentsD" class="floatLabel" id="comments"></textarea>
                                </aside>
                                <aside class="controls" id="commentsbox">
                                    <label for="commentsA">Amenities</label>
                                    <textarea name="commentsA" class="floatLabel" id="comments"></textarea>
                                </aside>
                                <input type="submit" value="Submit" class="subBtn"></input>
                            </article>  
                        </section> 
                    </form>

                </section>
            </main>     
        ';
        return $htmlDetailBooking;

    }

    public static function endPage(){
        $htmlEndPage = '
            </body>
        </html>
        ';
        return $htmlEndPage;
    }



}