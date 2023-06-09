<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function getSpecialOffer() {
        $sql= "SELECT B.id_accommodation,A.picture, A.beds,A.reviews,A.host_name,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.new_price,B.special_offer FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE SPECIAL_OFFER = 1";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();
    }
}