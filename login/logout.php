<?php

session_start();


$_SESSION = [];
session_destroy();

// Ensure the session cookie is deleted
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Redirect the user to the index page
header("Location: index.php");
exit();