<?php

require_once("./inc/Profile.class.php");
require_once("../Footer.Class.php");
require_once("../header/inc/Header.class.php");
// require_once("../result/inc/Utilities/PDOService.class.php");
// require_once("inc/Entities/AccDAO.class.php");
// require_once("inc/Result.class.php");
session_start();
if(!empty($_SESSION["logged"])){
    var_dump($_SESSION["username"]);
    echo Header::HeaderNav("Home","name","0",true);
    }else {
        echo Header::HeaderNav("Home","name","0",false);
    
    }
echo Profile::headPage();
echo Profile::mainContent();
echo Profile::endPage();
echo Footer::footer();