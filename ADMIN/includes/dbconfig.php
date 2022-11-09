<?php   

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cafe_db";
session_start();

$conn = mysqli_connect($server,$dbuser,$dbpass,$dbname);

// Check connection
$IMG_URL = "http://127.0.0.1/cafe/admin/menuitems/";
if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
 
 }
 
//  echo "Connected successfully";

?>