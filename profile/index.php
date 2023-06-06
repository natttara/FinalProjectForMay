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
WishListDAO::startDB();
$user = WishListDAO::getUserByEmail($email);

$idlist = [];
$wishlist = WishListDAO::getIdByEmail($email);
foreach($wishlist as $wish){
    $idlist[] = $wish->ID_ACCOMMODATION;
}

$acmlist = [];
foreach ($idlist as $id) {
    $acm = WishListDAO::getAccById($id);
    $acmlist[] = $acm;
}

if (!empty($_POST['delete'])){
    WishListDAO::deleteAccById($_POST['delete']);
    header("Location: ../profile/");
}

if (!empty($_POST['erase'])){
    $img = "";
    echo $img;
    WishListDAO::insertPictureByEmail($email,$img);
    header("Location: ../profile/");
}

if(!empty($_FILES)){
    if(move_uploaded_file($_FILES['upfile']['tmp_name'], 'img/'.$_FILES['upfile']['name'])){
    $img =  'img/'.$_FILES['upfile']['name'];
    echo $img;
    WishListDAO::insertPictureByEmail($email,$img);
    header("Location: ../profile/");
    }else{
    echo 'Upload fail'; 
    }
}

echo Header::HeaderNav("Home","name","0",true);
echo Profile::headPage();
echo Profile::mainContent($user,$acmlist);
echo Profile::endPage();
echo Footer::footer();