<?php   
require_once("./inc/Desc.class.php");
require_once("./inc/config.inc.php");
require_once("./inc/Acc.class.php");
require_once("./inc/PDOService.class.php");
require_once("./inc/AccDAO.class.php");
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
    $Accomodation = AccDAO::startDB();
    $singleAcc = AccDAO::getaCCById(14267);
    echo ($singleAcc->NAME);
        
        // echo Desc::body();
        
        
        ?>
    
</body> 
</html>