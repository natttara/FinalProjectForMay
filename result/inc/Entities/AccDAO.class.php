<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function get50() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
       LIMIT 10";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocation50($location) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        LIMIT 10";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuest50($guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        LIMIT 10";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuest50($location,$guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        LIMIT 10";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}