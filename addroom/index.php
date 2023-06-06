<?php

require_once("inc/config.inc.php");
require_once("../header/inc/Header.class.php");
require_once ('./inc/addRoom.class.php');
require_once("../Footer.Class.php");

echo addRoom::pageHead();
echo Header::HeaderNav("Home");
echo addRoom::detailBooking();
echo Footer::footer();
echo addRoom::endPage();