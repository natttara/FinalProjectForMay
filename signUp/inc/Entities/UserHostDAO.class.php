<?php

class UserHostDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function getMaxIdUser() {
        $sql = "SELECT * FROM `users` ORDER BY `ID_USER` DESC LIMIT 1";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function getMaxIdHost() {
        $sql = "SELECT * FROM `tb_hosts` ORDER BY `HOST_ID` DESC LIMIT 1";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertUser(User $newUser) {
        $sql = "INSERT INTO users(id_user,name,email,password) VALUES (:id,:name,:email,:password)";

        self::$db->query($sql);

        self::$db->bind(":id",$newUser->getId_user());
        self::$db->bind(":name",$newUser->getName());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":password",$newUser->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function insertHost(Host $newHost) {
        $sql = "INSERT INTO tb_hosts(host_id,email,host_name,password) VALUES (:id,:email,:name,:password)";

        self::$db->query($sql);

        self::$db->bind(":id",$newHost->getHost_id());
        self::$db->bind(":name",$newHost->getHost_name());
        self::$db->bind(":email",$newHost->getEmail());
        self::$db->bind(":password",$newHost->getPassword());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

}