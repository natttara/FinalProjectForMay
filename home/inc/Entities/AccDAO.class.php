<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function get10() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
       LIMIT 10";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}