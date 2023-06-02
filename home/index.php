<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/AccDAO.class.php");
require_once("./inc/Home.class.php");
require_once("../header/inc/Header.class.php");
require_once("../Footer.Class.php");


$Accomodation = AccDAO::startDB();
$acmList= AccDAO::getSpecialOffer();
echo Home::pageHead();
echo Header::HeaderNav("Home");
echo Home::mainContent($acmList);
echo Footer::footer();
echo Home::pageEnd();