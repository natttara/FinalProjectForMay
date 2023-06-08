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
    public static function insertPictureByEmailHost($host_name,$picture){
        $sql= "UPDATE tb_hosts SET HOST_PICTURE=:picture WHERE `HOST_NAME` = :host_name";
        self::$db->query($sql);
        self::$db->bind(":host_name",$host_name);
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
    public static function getUserTrips($email) {
        $sql= "SELECT B.ID_RESERVATION,B.ID_ACCOMMODATION,A.ID_USER,DATE_FORMAT(CHECK_IN, '%W %M %e %Y') AS CHECK_IN, DATE_FORMAT(CHECK_OUT, '%W %M %e %Y') AS CHECK_OUT, D.NAME, C.PICTURE,C.HOST_NAME FROM users A
        INNER JOIN tb_reservations B
        ON A.ID_USER=B.ID_USER
        INNER JOIN tb_acc_details C
        ON B.ID_ACCOMMODATION=C.ID_ACCOMMODATION
        INNER JOIN tb_accommodations D
        ON C.ID_ACCOMMODATION=D.ID_ACCOMMODATION
        where LOWER(EMAIL)=:email
        AND IS_ACCEPTED=1";
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
        WHERE LOWER(C.EMAIL)=:email
        AND IS_ACCEPTED=0";
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
        $sql= "SELECT B.ID_ACCOMMODATION,A.DESCRIPTION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,A.HOST_PICTURE AS PICTURE,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.IS_AVAILABLE, A.AMENITIES,B.SPECIAL_OFFER,B.NEW_PRICE FROM `tb_acc_details` A 
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
    public static function getByHost($email) {
        $sql= "SELECT B.ID_ACCOMMODATION,A.DESCRIPTION,A.PICTURE, A.BEDS,A.REVIEWS,A.HOST_NAME,A.HOST_PICTURE AS PICTURE,B.NAME,B.NEIGHBOURHOOD,B.ROOM_TYPE,B.PRICE_PER_NIGHT,B.MAX_GUESTS,B.IS_AVAILABLE, A.AMENITIES,B.SPECIAL_OFFER,B.NEW_PRICE FROM `tb_acc_details` A 
        INNER JOIN tb_accommodations B 
        ON A.ID_ACCOMMODATION=B.ID_ACCOMMODATION
        INNER JOIN tb_hosts C
        ON A.ID_ACCOMMODATION= C.ID_ACCOMMODATION
        WHERE LOWER(C.EMAIL)=:email";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self:: $db->singleResult();
    }

    public static function updateReservation($id_reservation,$is_accepted) {
        $sql = "UPDATE tb_reservations SET IS_ACCEPTED=:is_accepted WHERE ID_RESERVATION=:id_reservation";

        self::$db->query($sql);
        self::$db->bind(":id_reservation",$id_reservation);
        self::$db->bind(":is_accepted",$is_accepted);
        self::$db->execute();

        return self::$db->lastInsertedId();
    } 
    public static function deleteAccById($id) {
        $sql= "DELETE FROM tb_wishlist WHERE `id_accommodation` = :id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->rowCount();
    }

     
}