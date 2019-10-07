<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "password";
$dbName = "becode_genk";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>