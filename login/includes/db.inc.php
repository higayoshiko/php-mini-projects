<?php

$serverName = "localhost";
$dBUsername = "root";
$dbPassword = "Atarashii1";
$dbName = "loginproj";

$conn = mysqli_connect($serverName, $dBUsername, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());

}
