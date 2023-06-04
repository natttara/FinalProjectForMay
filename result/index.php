<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/AccDAO.class.php");
require_once("inc/Result.class.php");
require_once("../Footer.Class.php");
require_once("../header/inc/Header.class.php");
session_start();
$Accomodation = AccDAO::startDB();
$page=1;
if ( empty($_GET) && empty($_GET['page'])  ) {
    $page=1 ;
}else {
    if(!empty($_GET['page'])){
        $page=$_GET['page'];
    }
};
$acmList= AccDAO::get30($page);
echo Result::pageHead();
if(!empty($_SESSION["logged"])){
    var_dump($_SESSION["username"]);
    echo Header::HeaderNav("Home","name","0",true);
    }else {
        echo Header::HeaderNav("Home","name","0",false);
    
    }
echo Result::mainContent();

if ( !empty($_GET) && empty($_GET['page'])  ) {
    if(!empty($_GET['location'])){
        if($_GET['location'] == "All Vancouver"){
            if(!empty($_GET['sortBy'])){
                if ($_GET['sortBy'] == "price") {
                    if(!empty($_GET['guest'])){
                        $acmList = AccDAO::getGuestSorted30($_GET['guest'],"");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }else{
                        $acmList = AccDAO::getSorted30("");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }
                }else if ($_GET['sortBy'] == "priceDesc") {
                    if(!empty($_GET['guest'])){
                        $acmList = AccDAO::getGuestSorted30($_GET['guest'],"DESC");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }else{
                        $acmList = AccDAO::getSorted30("DESC");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }
            }
            }else if(!empty($_GET['guest'])){
                $acmList = AccDAO::getGuest30($_GET['guest']);
                echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
            }else{
                echo Result::roomList($acmList,$_GET['location'],"");
            }
        }else{
            $acmList = AccDAO::getLocation30($_GET['location']);
            if(!empty($_GET['sortBy'])){
                if ($_GET['sortBy'] == "price") {
                    if(!empty($_GET['guest'])){
                        $acmList = AccDAO::getLocationGuestSorted30($_GET['location'],$_GET['guest'],"");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }else{
                        $acmList = AccDAO::getLocationSorted30($_GET['location'],"");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }
                }else if ($_GET['sortBy'] == "priceDesc") {
                    if(!empty($_GET['guest'])){
                        $acmList = AccDAO::getLocationGuestSorted30($_GET['location'],$_GET['guest'],"DESC");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }else{
                        $acmList = AccDAO::getLocationSorted30($_GET['location'],"DESC");
                        echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
                    }
                }
            }else if(!empty($_GET['guest'])){
                $acmList = AccDAO::getLocationGuest30($_GET['location'],$_GET['guest']);
                echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
            }else{
                echo Result::roomList($acmList,$_GET['location'],"");
            }
    
        }
    }
   
    
} else {
    echo Result::roomList($acmList,"","");
}

echo Result::toTopRow();
echo Result::pagination($page);
echo Footer::footer();
echo Result::pageEnd();
