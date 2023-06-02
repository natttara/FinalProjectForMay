<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function get30($page) {
        $limit=($page-1)*30;
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        LIMIT $limit,30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocation30($location) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuest30($guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuest30($location,$guests) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getSorted30($order) {
        echo $order;
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        ORDER BY PRICE_PER_NIGHT $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationSorted30($location,$order) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        ORDER BY PRICE_PER_NIGHT $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuestSorted30($guests,$order) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuestSorted30($location,$guests,$order) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.NEW_PRICE,B.SPECIAL_OFFER FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.NEIGHBOURHOOD = '$location'
        AND B.MAX_GUESTS >= '$guests'
        ORDER BY PRICE_PER_NIGHT $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}