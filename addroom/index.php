<?php

require_once("./inc/config.inc.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Entities/AccDAO.class.php");
require_once ("./inc/addroom.class.php");
require_once("../header/inc/Header.class.php");
require_once("../Footer.Class.php");

session_start();

if (!empty ($_POST) ){
    // echo $_POST('rName');
    var_dump($_POST['roomName']);
    var_dump($_POST['bed']);
    var_dump($_POST['guest']);
    var_dump($_POST['price']);

    // var_dump($_POST['price']);
    // var_dump($_POST['price']);

    var_dump($_POST['selectRoom']);
    var_dump($_POST['place']);
    var_dump($_POST['commentsD']);
    var_dump($_POST['commentsA']);
    var_dump($_SESSION['name']);

    $startAcc = AccommodationDAO::startDB();
    $Acc = AccommodationDAO::insertRoomToAcc($_POST['roomName'],$_POST['place'],$_POST['selectRoom'],$_POST['price'],$_POST['guest']);

    var_dump($Acc);

    $AccDe = AccommodationDAO::insertRoomToAccDe(54400987,$_SESSION['name'],"TEST","TEST2",$_POST['bed'],$_POST['commentsA'],$_POST['commentsD'],"No Reviews yet");

    var_dump($AccDe);
}




echo addRoom::pageHead();
// echo Header::HeaderNav("Home");
echo addRoom::detailBooking();
echo Footer::footer();
echo addRoom::endPage();

