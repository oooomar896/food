<?php
include "../connect.php";
$user_name=filterRequest("user_name");
$users_password=sha1($_POST['user_password']);
$user_email=filterRequest("user_email");
$user_phone=filterRequest("user_phone");
$user_verfiycode=rand(10000 , 99999);


$stmt=$con->prepare("SELECT*from `users` where  `user_email`=? OR  `user_phone`=?");
$stmt->execute(array($user_email,$user_phone));
$count=$stmt->rowCount();

if($count>0){
    printflailure("phone or email");

}else{
$data= array(
    "user_name"=>$user_name,
    "user_password"=>$users_password,
    "user_email"=>$user_email,
    "user_phone"=>$user_phone,
    "user_verfiycode"=>$user_verfiycode,


);
sendEmail($user_email,"Verfiy code Food" , "Verfiy code $user_verfiycode");
insertData("users",$data);

}
?>
