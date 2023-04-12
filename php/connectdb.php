<?php
// Database connection data (use for XAMPP local)
$user = "root" ;
$pass = "qwerty" ;
$db = "dumfriesgamersdb" ;
$server = "mariadb" ;

// This is the connection string
$db = new PDO("mysql:host=mariadb;dbname=$db", $user, $pass);
// Check for any errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
