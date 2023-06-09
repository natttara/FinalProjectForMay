<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/User.class.php");
require_once("../description/inc/Acc.class.php");
require_once("../description/inc/AccDAO.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("../login/inc/Entity/UserDAO.php");
require_once("./inc/Entities/WishListDAO.class.php");
require_once("../header/inc/Header.class.php");
require_once("./inc/Profile.class.php");
require_once("../Footer.Class.php");

session_start();
$email = $_SESSION['username'];
WishListDAO::startDB();
UserDAO::startDB();
AccDAO::startDB();

$idlist = [];
$wishlist = WishListDAO::getIdByEmail($email);
foreach($wishlist as $wish){
    $idlist[] = $wish->ID_ACCOMMODATION;
}

$acmlist = [];
foreach ($idlist as $id) {
    $acm = AccDAO::getAccById($id);
    $acmlist[] = $acm;
}
if($_SESSION["type"]=='host') {
$reservations = WishListDAO::getReservations(strtolower($_SESSION["username"]));
$accAll = AccDAO::getAllByHost(strtolower($_SESSION["username"]));
$user = WishListDAO::getByHost(strtolower($email));
$trips='';
}else {
    $reservations='';  
    $accAll=''; 
    $trips = WishListDAO::getUserTrips(strtolower($_SESSION["username"]));
    $user = UserDAO::getEmail(strtolower($email));


}

if(!empty($_SESSION["logged"])){
    echo Header::HeaderNav("Home","name","0",true);
}else {
     echo Header::HeaderNav("Home","name","0",false);
    
}

if (!empty($_POST['delete'])){
    WishListDAO::deleteAccById($_POST['delete']);
    header("Location: ../profile/");
}

if (!empty($_POST['erase'])){
    $img = "";
    if($_SESSION["type"]=='host') {
        WishListDAO::insertPictureByEmailHost($_SESSION['name'],$img);

    }else{
        WishListDAO::insertPictureByEmail($email,$img);

    }
    header("Location: ../profile/");
}

if(!empty($_FILES)){
    if(move_uploaded_file($_FILES['upfile']['tmp_name'], 'img/'.$_FILES['upfile']['name'])){
    $img =  'img/'.$_FILES['upfile']['name'];
    echo $img;
    if($_SESSION["type"]=='host') {
        WishListDAO::insertPictureByEmailHost($_SESSION['name'],$img);
    }else{
        WishListDAO::insertPictureByEmail($email,$img);

    }
    header("Location: ../profile/");
    }else{
    echo 'Upload fail'; 
    }

}


if(!empty($_POST["acceptation"])){
    if($_POST["acceptation"]=="No"){
        var_dump($_POST["reservation"]);
        WishListDAO::updateReservation($_POST["reservation"],2); 
        header("Location: ./");

    }else {
        WishListDAO::updateReservation($_POST["reservation"],1); 
        header("Location: ./");

    }
}

echo Profile::headPage();
echo Profile::mainContent($user,$acmlist,$reservations,$accAll,$trips);
echo Profile::endPage();
echo Footer::footer();