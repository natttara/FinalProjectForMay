<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/AccDAO.class.php");
require_once("./inc/Home.class.php");

$Accomodation = AccDAO::startDB();
$acmList= AccDAO::get10();
echo Home::pageHead();
echo Home::mainContent($acmList);
echo Home::pageEnd();