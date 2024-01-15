<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register_form";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>