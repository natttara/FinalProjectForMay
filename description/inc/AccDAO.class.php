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
        $sql= "SELECT B.ID_ACCOMMODATION,A.DESCRIPTION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,A.HOST_PICTURE,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.IS_AVAILABLE, A.AMENITIES,B.SPECIAL_OFFER,B.NEW_PRICE FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->singleResult();
    }

    public static function getReviewsId($id) {
        $sql= "SELECT * FROM tb_reviews WHERE ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
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
}