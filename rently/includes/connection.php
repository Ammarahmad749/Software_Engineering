<?php 

error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$db = "renty_db";

// Connect to DB

$conn = mysqli_connect($server,$username,$password,$db);

// Check connection

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

//echo "Connected Successfully";

?>