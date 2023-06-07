<?php
    
class WishListDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("User");
    }

    public static function getUserByEmail($email) {
        $sql= "SELECT ID_USER,NAME,EMAIL,PASSWORD,PICTURE FROM users WHERE EMAIL = :email;";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->singleResult();
    }

    public static function insertPictureByEmail($email,$picture){
        $sql= "UPDATE users SET picture=:picture WHERE `EMAIL` = :email";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->bind(":picture",$picture);
        self::$db->execute();

        return self:: $db->lastInsertedId();
    }

    public static function getIdByEmail($email) {
        $sql= "SELECT ID_ACCOMMODATION,EMAIL FROM tb_wishlist WHERE EMAIL = :email;";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->resultSet();
    }

    public static function getAccById($id) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.PICTURE,B.NAME,B.NEIGHBOURHOOD,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.IS_AVAILABLE,B.SPECIAL_OFFER,B.NEW_PRICE FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        WHERE B.ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->singleResult();
    }

    public static function deleteAccById($id) {
        $sql= "DELETE FROM tb_wishlist WHERE `id_accommodation` = :id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->rowCount();
    }

     
}