<?php
require_once("./inc/Utilities/Login.class.php");
require_once("./inc/config.inc.php");
require_once("./inc/Entity/User.class.php");
require_once("./inc/Entity/PDOService.class.php");
require_once("./inc/Entity/UserDAO.php");
require_once("./inc/config.inc.php");
require_once("../header/inc/Header.class.php");
require_once("../Footer.Class.php");


if(!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    UserDAO::startDB();
    $userEmail = UserDAO::getEmail(strtolower($email));
    $userType='user';

    if(!$userEmail){
        $userEmail = UserDAO::getEmailHost(strtolower($email));
        $userType='host';
    }
    if($email!='' && $password!='' ) {

        if(hash('MD5',$password)==$userEmail->getPassword()) {
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $userEmail->getEmail();
            $_SESSION["name"] = $userEmail->getName();
            $_SESSION["type"] =$userType;

            header("Location: ../home/");
        }else {
    
        }
    }

};

echo Login::pageHead();
echo Header::HeaderNav("Home","name","0",false);
echo Login::loginSection();
echo Footer::footer();
echo Login::endPage();

