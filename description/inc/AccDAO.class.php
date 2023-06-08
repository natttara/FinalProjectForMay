<?php
    
class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function getAll() {
        $sql= "SELECT * FROM tb_accommodations LIMIT 50";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();

    }

    public static function getaCCById($id) {
        $sql= "SELECT B.id_accommodation,A.description,A.picture, A.beds,A.reviews,A.host_name,A.host_picture,B.name,B.NEIGHBOURHOOD as neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.IS_AVAILABLE, A.AMENITIES,B.special_offer,B.NEW_PRICE FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->singleResult();
    }
    public static function getAllByHost($email) {
        $sql= "SELECT B.id_accommodation,A.description,A.picture, A.BEDS,A.reviews,A.host_name,A.host_picture,B.name,B.neighbourhood,B.room_type,B.price_per_night,B.max_guests,B.IS_AVAILABLE, A.AMENITIES,B.special_offer,B.NEW_PRICE FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        INNER JOIN tb_hosts C
        ON A.ID_ACCOMMODATION= C.ID_ACCOMMODATION
        WHERE LOWER(C.EMAIL)=:email";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->resultSet();
    }


    
    public static function insertWishList($email,$id_acm) {
        $sql = "INSERT INTO tb_wishlist(email,ID_ACCOMMODATION) VALUES (:email,:acmId)";

        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->bind(":acmId",$id_acm);
        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getUserById($email) {
        $sql= "SELECT * FROM users where EMAIL=:email";
        self::$db->query($sql);
        self::$db->bind(":email",$email);

        self::$db->execute();
        return self:: $db->singleResult();

    }
    public static function getHostById($id_place) {
        $sql= "SELECT * FROM tb_hosts where ID_ACCOMMODATION=:id_place";
        self::$db->query($sql);
        self::$db->bind(":id_place",$id_place);

        self::$db->execute();
        return self:: $db->singleResult();

    }

    public static function insertReservation($id_acc,$id_user,$id_host,$check_in,$check_out,$is_accepted,$guests) {
        $sql = "INSERT INTO tb_reservations(ID_ACCOMMODATION,ID_USER,ID_U_HOST,CHECK_IN,CHECK_OUT,IS_ACCEPTED,GUESTS) VALUES (:id_acc,:id_user,:id_host,:check_in,:check_out,:is_accepted,:guests)";
        self::$db->query($sql);
        self::$db->bind(":id_acc",$id_acc);
        self::$db->bind(":id_user",$id_user);
        self::$db->bind(":id_host",$id_host);
        self::$db->bind(":check_in",$check_in);
        self::$db->bind(":check_out",$check_out);
        self::$db->bind(":is_accepted",$is_accepted);
        self::$db->bind(":guests",$guests);
        self::$db->execute();

        return self::$db->lastInsertedId();
    }

}