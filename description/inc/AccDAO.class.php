<?php

class AccDAO {
    private static $db;

    public static function startDb(){
        self:: $db = new PDOService("Accommodation");
     }

    public static function getAll() {
        $sql= "SELECT * FROM tb_accommodations LIMIT 3";
        self::$db->query($sql);
        self::$db->execute();
        return self::$db->resultSet();

    }

    public static function getaCCById($id) {
        $sql= "SELECT * FROM tb_accommodations WHERE ID_ACCOMMODATION=:id";
        self::$db->query($sql);
        self::$db->bind(":id",$id);
        self::$db->execute();

        return self:: $db->singleResult();
    }
}