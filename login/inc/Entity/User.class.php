<?php 
session_start();

if (isset($_SESSION['id_user']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <h1>Login successful!</h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
