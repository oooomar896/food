<?php

include "../connect.php";
$user_email = filterRequest("user_email"); 
$user_password = sha1($_POST['user_password']);

getData("users" , "user_email = ? AND  user_password = ?" , array($user_email , $user_password)) ; 
