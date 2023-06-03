<?php

class UserHostDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser) {
        $sql = "INSERT INTO tb_users(email,userName,password) VALUES (:email,:userName,:password)";

        self::$db->query($sql);

        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":userName",$newUser->getUserName());
        self::$db->bind(":password",$newUser->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function insertHost(Host $newHost) {
        $id = rand(100000000,999900099);
        $sql = "INSERT INTO tb_hosts(host_id,email,host_name,password) VALUES ($id,:email,:userName,:password)";

        self::$db->query($sql);

        self::$db->bind(":email",$newHost->getEmail());
        self::$db->bind(":userName",$newHost->getHost_name());
        self::$db->bind(":password",$newHost->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    // public static function getUserEmail($email) {
    //     $sql = "SELECT * FROM tb_users WHERE email=:email";

    //     self::$db->query($sql);

    //     self::$db->bind(":email",$email);
    //     self::$db->execute();

    //     return self::$db->singleResult();
    // }
}