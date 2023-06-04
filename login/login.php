<?php
session_start();
// include "config.inc.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        $_SESSION['error'] = "User name and password are required";
        header("Location: index.php");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT * FROM tb_users WHERE user_name = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($pass, $row['password'])) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id_user'] = $row['id_user'];
            header("Location: './home/index.php");
            exit();
        } else {
            $_SESSION['error'] = "Incorrect user name or password";
            header("Location: index.php");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}

