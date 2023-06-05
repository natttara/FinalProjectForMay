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
$id = $_GET['id'];
WishListDAO::startDB();
$user = WishListDAO::getUserByEmail($email);
$acm = WishListDAO::getAccById($id);
echo Header::HeaderNav("Home","name","0",true);
echo Profile::headPage();
echo Profile::mainContent($user,$acm);
echo Profile::endPage();
echo Footer::footer();