<?php

require_once("../header/inc/Header.class.php");
require_once("./inc/Profile.class.php");
require_once("../Footer.Class.php");


echo Header::HeaderNav("Home","name","0",true);
echo Profile::headPage();
echo Profile::mainContent();
echo Profile::endPage();
echo Footer::footer();