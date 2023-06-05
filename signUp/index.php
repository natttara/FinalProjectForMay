<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Entities/Host.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Entities/UserHostDAO.class.php");
require_once("../header/inc/Header.class.php");
require_once("./inc/SignUp.class.php");
require_once("../Footer.Class.php");

echo SignUp::pageHead();
echo Header::HeaderNav("Home","name","0",false);

if (empty($_POST)) {
    echo SignUp::signUpSection();
    
}else if(!empty($_POST['name']) && !empty($_POST['uEmail']) && !empty($_POST['password'])){

    $hashedPass = hash('MD5',$_POST['password']);
    echo SignUp::successPage($_POST['name']);
    UserHostDAO::startDb();
    $maxIdUser =  UserHostDAO::getMaxIdUser();
    $newId =  $maxIdUser->ID_USER +1;
    
    $newUser = new User();

    $newUser->setId_user($newId);
    $newUser->setName($_POST['name']);
    $newUser->setEmail($_POST['uEmail']);
    $newUser->setPassword($hashedPass);
    
    $insertUser = UserHostDAO::insertUser($newUser);

    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["username"] = $_POST['uEmail'];
    header("Location: ../home/");
    
}else if(!empty($_POST['name']) && !empty($_POST['oEmail']) && !empty($_POST['password'])){
    
    echo SignUp::successPage($_POST['name']);

    $hashedPass = hash('MD5',$_POST['password']);
    UserHostDAO::startDb();
    $maxIdHost =  UserHostDAO::getMaxIdHost();
    $newId =  $maxIdHost->HOST_ID +1;
    
    $newHost = new Host();
    $newHost->setHost_id($newId);
    $newHost->setHost_name($_POST['name']);
    $newHost->setEmail($_POST['oEmail']);
    $newHost->setPassword($hashedPass);

    $insertHost = UserHostDAO::insertHost($newHost);

    
    session_start();
    $_SESSION["logged"] = true;
    $_SESSION["username"] = $_POST['oEmail'];
    header("Location: ../home/");
}

echo Footer::footer();
echo SignUp::endPage();