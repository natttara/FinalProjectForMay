<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser) {
        $sql = "INSERT INTO tb_users(userName,email,password,picture) VALUES (:userName,:email,:password,:picture)";

        self::$db->query($sql);

        self::$db->bind(":userName",$newUser->getUserName());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":password",$newUser->getPassword());
        self::$db->bind(":picture",$newUser->getPicture());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }
}