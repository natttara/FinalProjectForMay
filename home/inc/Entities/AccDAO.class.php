<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function getSpecialOffer() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE SPECIAL_OFFER = 1";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}