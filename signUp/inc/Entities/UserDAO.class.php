<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser) {
        // var_dump($newUser);
        $sql = "INSERT INTO tb_users(email,password) VALUES (:email,:password)";

        self::$db->query($sql);

        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":password",$newUser->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getUserEmail($email) {
        $sql = "SELECT * FROM tb_users WHERE email=:email";

        self::$db->query($sql);

        self::$db->bind(":email",$email);
        self::$db->execute();

        return self::$db->singleResult();
    }
}