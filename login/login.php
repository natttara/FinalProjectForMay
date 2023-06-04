<?php 
session_start(); 
include "config.inc.php";

// if (isset($_POST['uname']) && isset($_POST['password'])) {

// 	function validate($data){
//        $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}

// 	$uname = validate($_POST['uname']);
// 	$pass = validate($_POST['password']);

// 	if (empty($uname)) {
// 		header("Location: index.php?error=User Name is required");
// 	    exit();
// 	}else if(empty($pass)){
//         header("Location: index.php?error=Password is required");
// 	    exit();
// 	}else{
// 		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

// 		$result = mysqli_query($conn, $sql);

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//             if ($row['user_name'] === $uname && $row['password'] === $pass) {
//             	$_SESSION['user_name'] = $row['user_name'];
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['id'] = $row['id'];
//             	header("Location: home.php");
// 		        exit();
//             }else{
// 				header("Location: index.php?error=Incorrect User name or password");
// 		        exit();
// 			}
// 		}else{
// 			header("Location: index.php?error=Incorrect User name or password");
// 	        exit();
// 		}
// 	}
	
// }else{
// 	header("Location: index.php");
// 	exit();
// }

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
    ?>