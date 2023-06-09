<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function get30($page) {
        $limit=($page-1)*30;
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        LIMIT $limit,30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocation30($location) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.neighbourhood = '$location'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuest30($guests) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.max_guests >= '$guests'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuest30($location,$guests) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.neighbourhood = '$location'
        AND B.max_guests >= '$guests'
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getSorted30($order) {
        echo $order;
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        ORDER BY price_per_night $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationSorted30($location,$order) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.neighbourhood = '$location'
        ORDER BY price_per_night $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getGuestSorted30($guests,$order) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.max_guests >= '$guests'
        ORDER BY price_per_night $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }

    public static function getLocationGuestSorted30($location,$guests,$order) {
        $sql= "SELECT B.id_accommodation,A.picture, A.BEDS,A.REVIEWS,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.NEW_PRICE,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.id_accommodation=B.id_accommodation
        WHERE B.neighbourhood = '$location'
        AND B.max_guests >= '$guests'
        ORDER BY price_per_night $order
        LIMIT 30";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}