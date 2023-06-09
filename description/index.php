<?php   
require_once("./inc/Desc.class.php");
require_once("./inc/config.inc.php");
require_once("./inc/Acc.class.php");
require_once("./inc/Review.class.php");
require_once("./inc/PDOService.class.php");
require_once("./inc/AccDAO.class.php");
require_once("./inc/RevDAO.class.php");
require_once("../Footer.Class.php");
require_once("../header/inc/Header.class.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

 <?php 
session_start();
if (!empty($_GET)) {
    $Accomodation = AccDAO::startDB();
    $Review = RevDAO::startDB();
    $singleAcc = AccDAO::getaCCById($_GET['accommodation_id']);
    $reviews = RevDAO::getReviewsId($_GET['accommodation_id']);
    // var_dump($singleAcc->getId());
    if($singleAcc){
        $amenities = explode(";",$singleAcc->AMENITIES);
        if(!empty($_SESSION["logged"])){

            if ( !empty($_GET['wish'])){
                echo $_GET['wish'];
                $insertWishList = AccDAO::insertWishList($_SESSION['username'],$_GET['accommodation_id']);
            }
            if(!empty($_POST)) {
                $userData = AccDAO::getUserById($_SESSION['username']);
                $hostData = AccDAO::getHostById($_GET['accommodation_id']);
                AccDAO::insertReservation($_GET['accommodation_id'],$userData->ID_USER,$hostData->ID_U_HOST,$_POST["checkIn"],$_POST["checkOut"],0,$_POST["guests"]);
            }

            $logged = true;
            echo Header::HeaderNav("description",$singleAcc->getName(),$singleAcc->getReview(),true);
            echo Desc:: body($singleAcc,$amenities,$reviews,$logged,$_GET['accommodation_id']);
        }else {
            $logged = false;
            echo Header::HeaderNav("description",$singleAcc->getName(),$singleAcc->getReview(),false);
            echo Desc:: body($singleAcc,$amenities,$reviews,$logged,$_GET['accommodation_id']);
            
            }
        echo Footer::footer();
    }else {
        echo Desc:: notFound();
    }

    
}else {
    echo Desc:: notFound();

};
        
        
        
        ?>
    
</body> 
</html>