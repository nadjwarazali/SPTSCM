<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 if (mysqli_connect_error()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }

 
?>
