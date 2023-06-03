<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/UserDAO.class.php");
require_once("../header/inc/Header.class.php");
require_once("./inc/SignUp.class.php");
require_once("../Footer.Class.php");

echo Login::pageHead();
echo Header::HeaderNav("Home");

if (empty($_POST)) {
    echo Login::signUpSection();
    
}else{

    echo Login::successPage();
    UserDAO::startDb();

    $newUser = new User();
    $newUser->setEmail($_POST['email']);
    $newUser->setPassword($_POST['password']);

    $insertUser = UserDAO::insertUser($newUser);

}

echo Footer::footer();
echo Login::endPage();