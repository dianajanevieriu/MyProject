<?php
include "functions.php";

$email = $_POST['login-form-email'];
$password  = md5($_POST['login-form-password']);

$userData = query("SELECT * FROM users WHERE email='$email' AND password='$password'");

if(count($userData)>0){
    $_SESSION['userId'] = $userData[0]['id'];
    header("Location: index.php");
} else {
    header("Location: login.php");
}