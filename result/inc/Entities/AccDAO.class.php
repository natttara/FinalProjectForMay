<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function get25() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
       LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocation25($location) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuest25($guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuest25($location,$guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getSorted25() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        ORDER BY PRICE_PER_NIGHT
       LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationSorted25($location) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        ORDER BY PRICE_PER_NIGHT
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuestSorted25($guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuestSorted25($location,$guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getSortedDesc25() {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        ORDER BY PRICE_PER_NIGHT DESC
       LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationSortedDesc25($location) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        ORDER BY PRICE_PER_NIGHT DESC
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuestSortedDesc25($guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT DESC
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuestSortedDesc25($location,$guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT DESC
        LIMIT 25";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}