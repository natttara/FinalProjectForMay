<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/User.class.php");
require_once("./inc/Entities/Accommodation.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Entities/WishListDAO.class.php");
require_once("../header/inc/Header.class.php");
require_once("./inc/Profile.class.php");
require_once("../Footer.Class.php");

session_start();
$email = $_SESSION['username'];
WishListDAO::startDB();
$user = WishListDAO::getUserByEmail($email);

$idlist = [];
$wishlist = WishListDAO::getIdByEmail($email);
foreach($wishlist as $wish){
    $idlist[] = $wish->ID_ACCOMMODATION;
}

$acmlist = [];
foreach ($idlist as $id) {
    $acm = WishListDAO::getAccById($id);
    $acmlist[] = $acm;
}
if($_SESSION["type"]=='host') {
$reservations = WishListDAO::getReservations(strtolower($_SESSION["username"]));
$accAll = WishListDAO::getAllByHost(strtolower($_SESSION["username"]));
}else {
    $reservations='';  
    $accAll=''; 
}
if(!empty($_SESSION["logged"])){
    var_dump($_SESSION["username"]);
    echo Header::HeaderNav("Home","name","0",true);
    }else {
        echo Header::HeaderNav("Home","name","0",false);
    
    }
echo Profile::headPage();
echo Profile::mainContent($user,$acmlist,$reservations,$accAll);
echo Profile::endPage();
echo Footer::footer();