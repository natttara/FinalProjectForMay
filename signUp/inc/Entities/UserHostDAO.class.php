<?php

class UserHostDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser) {
        $sql = "INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";

        self::$db->query($sql);

        self::$db->bind(":name",$newUser->getName());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":password",$newUser->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function insertHost(Host $newHost) {
        $id = rand(100000000,999900099);
        $sql = "INSERT INTO tb_hosts(host_id,email,host_name,password) VALUES ($id,:email,:name,:password)";

        self::$db->query($sql);

        self::$db->bind(":email",$newHost->getEmail());
        self::$db->bind(":name",$newHost->getHost_name());
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