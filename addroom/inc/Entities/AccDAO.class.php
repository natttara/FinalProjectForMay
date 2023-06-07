<?php

class AccommodationDAO {

    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertRoomToAcc($name,$neighbourhood,$type,$price,$guest) {
        $sql = "INSERT INTO tb_accommodations(name,neighbourhood,room_type,price_per_night,max_guests,is_available) VALUES (:name,:neighbourhood,:type,:price,:guest,0)";
        self::$db->query($sql);

        self::$db->bind(":name",$name);
        self::$db->bind(":neighbourhood",$neighbourhood);
        self::$db->bind(":type",$type);
        self::$db->bind(":price",$price);
        self::$db->bind(":guest",$guest);


        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function insertRoomToAccDe($id_acc,$hostName,$hostPic,$roomPic,$beds,$amenities,$description,$reviews) {
        $sql = "INSERT INTO tb_acc_details(id_accommodation,host_name,host_picture,picture,beds,amenities,description,reviews) VALUES (:id_acc,:hostName,:hostPic,:roomPic,:beds,:amenities,:description,:reviews)";
        self::$db->query($sql);

        self::$db->bind(":id_acc",$id_acc);
        self::$db->bind(":hostName",$hostName);
        self::$db->bind(":hostPic",$hostPic);
        self::$db->bind(":roomPic",$roomPic);
        self::$db->bind(":beds",$beds);
        self::$db->bind(":amenities",$amenities);
        self::$db->bind(":description",$description);
        self::$db->bind(":reviews",$reviews);


        self::$db->execute();

        return self::$db->lastInsertedId();
    }



}