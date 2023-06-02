<?php   
require_once("./inc/Desc.class.php");
require_once("./inc/config.inc.php");
require_once("./inc/Acc.class.php");
require_once("./inc/PDOService.class.php");
require_once("./inc/AccDAO.class.php");
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
if (!empty($_GET)) {
    $Accomodation = AccDAO::startDB();
    $singleAcc = AccDAO::getaCCById($_GET['accommodation_id']);
    $reviews = AccDAO::getReviewsId($_GET['accommodation_id']);
echo Header::HeaderNav("description",$singleAcc->NAME,$singleAcc->REVIEWS);


     $amenities = explode(";",$singleAcc->AMENITIES);
    // echo Desc:: body($singleAcc->NAME,$singleAcc->NEIGHBOURHOOD,$singleAcc->ROOM_TYPE,$singleAcc-> MAX_GUESTS,$singleAcc-> PRICE_PER_NIGHT,$singleAcc-> DESCRIPTION,$singleAcc-> PICTURE,$singleAcc-> HOST_PICTURE,$singleAcc-> HOST_NAME,$singleAcc-> REVIEWS,$amenities, $reviews,$singleAcc->SPECIAL_OFFER,$singleAcc->NEW_PRICE);
    echo Desc:: body($singleAcc,$amenities,$reviews);
    // for($i=0;$i<count($reviews);$i++) {
    //     echo $reviews[$i]->COMMENT;
    // };
echo Footer::footer();
    
};
        
        
        
        ?>
    
</body> 
</html>