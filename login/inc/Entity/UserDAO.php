<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }


    public static function getEmail( string $email ) {
        $sql = "SELECT * FROM users WHERE LOWER(EMAIL)=:email";
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();

        return self::$db->singleResult();
    }
}