<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/AccDAO.class.php");
require_once("inc/Entities/AcmRepository.class.php");
require_once("inc/Result.class.php");

$Accomodation = AccDAO::startDB();
$acmList= AccDAO::get30();

$acmRepository = new AcmRepository();
$acmRepository->setAcmList($acmList);

echo Result::pageHead();
echo Result::mainContent();

if ( !empty($_GET) ) {
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
    
} else {
    echo Result::roomList($acmList,"","");
}

echo Result::toTopRow();
echo Result::pageEnd();