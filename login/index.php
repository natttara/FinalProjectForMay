<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entity/User.class.php");
// require_once("./inc/Utilities/LoginManager.class.php");
require_once("./inc/Utilities/Login.class.php");





Login::pageHead();
Login::loginSection();
Login::endPage();