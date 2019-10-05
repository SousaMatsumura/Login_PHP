<?php

$serverName="localhost";
$dbUserName="root";
$dbPssword="";
$dbName="loginsystem";

$conn = mysqli_connect($serverName, $dbUserName, $dbPssword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
