<?php
$server="localhost";
$user="user";
$pass="";
$db="Bike";

$conn=mysqli_connect($server,$user,$pass,$db);

if(!$conn){
die("Connection Failed ".mysqli_connect_error());
}
?>