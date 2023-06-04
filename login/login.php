<?php
require_once("./inc/Utilities/Login.class.php");
require_once("./inc/config.inc.php");
require_once("./inc/Entity/User.class.php");
require_once("./inc/Entity/PDOService.class.php");
require_once("./inc/Entity/UserDAO.php");
require_once("./inc/config.inc.php");


if(!empty($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    UserDAO::startDB();
    $userEmail = UserDAO::getEmail(strtolower($email));
    if($email!='' && $password!='' ) {
        if(hash('MD5',$password)==$userEmail->PASSWORD) {
            var_dump('good');
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $userEmail->EMAIL;
            header("Location: ../home/");
        }else {
            var_dump('bad');
    
        }
    }

};

echo Login::pageHead();
echo Login::loginSection();
echo Login::endPage();

