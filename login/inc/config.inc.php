<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "db_vanbooking";

// Establishing the database connection
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
