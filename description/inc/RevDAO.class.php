<?php
    
class RevDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Review");
     }
     public static function getReviewsId($id) {
        $sql= "SELECT ID_ACCOMMODATION,id_review,review_date,reviewer_name,comment FROM tb_reviews WHERE ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->resultSet();
    }
}