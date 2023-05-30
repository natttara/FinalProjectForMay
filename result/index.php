<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/AccDAO.class.php");
require_once("inc/Entities/AcmRepository.class.php");
require_once("inc/Result.class.php");

$Accomodation = AccDAO::startDB();
$acmList= AccDAO::get50();

$acmRepository = new AcmRepository();
$acmRepository->setAcmList($acmList);

echo Result::pageHead();
echo Result::mainContent();

if ( !empty($_GET) ) {
    if($_GET['location'] == "All Vancouver"){
        if (!empty($_GET['sortBy'])) {
            $acmList = AccDAO::getGuest50($_GET['guest']);
            $acmRepository->sortAcm($_GET['sortBy']);
            echo Result::roomList($acmRepository->getAcmList(),$_GET['location'],$_GET['guest']);
        }else if(!empty($_GET['guest'])){
            $acmList = AccDAO::getGuest50($_GET['guest']);
            echo Result::roomList($acmList,$_GET['location'],$_GET['guest']);
        }else{
            echo Result::roomList($acmList,$_GET['location'],"");
        }
    }else{
        $acmList = AccDAO::getLocation50($_GET['location']);
        if (!empty($_GET['sortBy'])) {
            $acmList = AccDAO::getLocationGuest50($_GET['location'],$_GET['guest']);
            $acmRepository->sortAcm($_GET['sortBy']);
            echo Result::roomList($acmRepository->getAcmList(),$_GET['location'],$_GET['guest']);
        }else if(!empty($_GET['guest'])){
            $acmList = AccDAO::getLocationGuest50($_GET['location'],$_GET['guest']);
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