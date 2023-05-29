<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Accommodation.class.php");
require_once("inc/Entities/AcmRepository.class.php");
require_once("inc/Utilities/FileManager.class.php");
require_once("inc/Utilities/FileParse.acm.class.php");
require_once("inc/Result.class.php");

echo Result::pageHead();

$fileContent = FileManager::readCsvFile(CSV_FILE_PATH);
$acmList = FileParse::parseFromStringToAcm($fileContent);

$acmRepository = new AcmRepository();
$acmRepository->setAcmList($acmList);

echo Result::mainContent();

if ( !empty($_GET) ) {
    if (!empty($_GET['sortBy'])) {
        $acmRepository->sortAcm($_GET['sortBy']);
        echo Result::roomList($acmRepository->getAcmList());
    }
    
} else {
    echo Result::roomList($acmRepository->getAcmList());
}

echo Result::toTopRow();

echo Result::pageEnd();