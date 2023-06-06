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
            <link rel="stylesheet" href="/css/style.css">
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
                    <form action="add_room.php" method="POST" class="aroom">
                        <section class="form-group" id="top">
                            <h2 class="heading">Add Room</h2>
                            <article>
                                <section class="hrname">
                                    <aside class="controls">
                                        <label for="name">Host Name</label>
                                        <input type="text" id="name" class="floatLabel" name="name">
                                    </aside> 
                                    <aside class="controls">
                                        <label for="name">Room Name</label>
                                        <input type="text" id="name" class="floatLabel" name="name">
                                    </aside>
                                </section>
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
                                    <label for="myfile">Select pictures of the room file:</label>
                                    <input type="file" id="myfile" name="myfile" />
                                </aside>
                                <aside class="controls">
                                    <label for="myfile">Select a picture of the host file:</label>
                                    <input type="file" id="myfile" name="myfile" />
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
                                        <select class="floatLabel">
                                            <option value="blank">Entire home/apt</option>
                                            <option value="1">Hotel room</option>
                                            <option value="2" selected>Private room</option>
                                            <option value="3">Shared room</option>
                                        </select>
                                    </aside>      
                                </section>
                                <section class="col-1-3 col-1-3-sm">
                                    <aside class="controls">
                                        <label for="room">Location</label>
                                        <select class="floatLabel">
                                            <label for="location">Location:</label>
                                
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
                                </section>
                            </article>
                            <article class="grid" id="commentssec">
                                <p class="info-text">Please describe your room details</p>
                                <aside class="controls" id="commentsbox">
                                    <label for="comments">Description</label>
                                    <textarea name="comments" class="floatLabel" id="comments"></textarea>
                                </aside>
                                <aside class="controls" id="commentsbox">
                                    <label for="comments">Amenities</label>
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

    public static function endPage(){
        $htmlEndPage = '
            </body>
        </html>
        ';
        return $htmlEndPage;
    }



}