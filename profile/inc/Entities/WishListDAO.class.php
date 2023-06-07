<?php
    
class WishListDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("User");
    }

    public static function getUserByEmail($email) {
        $sql= "SELECT ID_USER,NAME,EMAIL FROM users WHERE EMAIL = :email;";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->singleResult();
    }

    public static function getIdByEmail($email) {
        $sql= "SELECT ID_ACCOMMODATION,EMAIL FROM tb_wishlist WHERE EMAIL = :email;";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->resultSet();
    }
    public static function getReservations($email) {
        $sql= "SELECT C.*,D.NAME as USER_NAME,E.NAME,F.PICTURE FROM
        (SELECT ID_RESERVATION,A.ID_ACCOMMODATION,ID_USER, A.ID_U_HOST,DATE_FORMAT(CHECK_IN, '%W %M %e %Y') AS CHECK_IN ,DATE_FORMAT(CHECK_OUT, '%W %M %e %Y') AS CHECK_OUT,IS_ACCEPTED,GUESTS,B.EMAIL FROM `tb_reservations` A
        INNER JOIN tb_hosts B
        ON A.ID_U_HOST=B.ID_U_HOST) C
        INNER JOIN users D
        ON C.ID_USER=D.ID_USER
        INNER JOIN tb_accommodations E
        ON E.ID_ACCOMMODATION= C.ID_ACCOMMODATION
        INNER JOIN tb_acc_details F
        ON F.ID_ACCOMMODATION=C.ID_ACCOMMODATION
        WHERE LOWER(C.EMAIL)=:email";
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

    public static function getAllByHost($email) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.DESCRIPTION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,A.HOST_PICTURE,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.IS_AVAILABLE, A.AMENITIES,B.SPECIAL_OFFER,B.NEW_PRICE FROM `tb_acc_details` A 
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

     
}