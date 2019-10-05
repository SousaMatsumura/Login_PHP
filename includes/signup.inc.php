<?php

if(isset($_POST['signup-submit'])){
    require "dbh.inc.php";
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd_repeat'];

    if(empty($username) || empty($mail) || empty($pwd) || empty($pwd_repeat)){
        header("Location: ..signup.php/?");

    }
    
}
