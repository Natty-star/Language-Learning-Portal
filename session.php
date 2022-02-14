<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require_once ("class/config.php");
require_once ("class/db.php");

//$db = new db();

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
 $sql="SELECT * FROM `subscribers` WHERE `phone_number` LIKE  '251".$user_check."'";
 $db = new db();

if(!$db->exist($sql)){
    echo $db->exist($sql);
//mysql_close($connection); // Closing Connection
header("Location: ".SUBSCRIBE); // Redirecting To Home Page
}
?>