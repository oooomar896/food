<?php
include "./connect.php";
$bn=$conect->prepare("SELECT * FROM  user_communication");
$bn->execute();//تنفيذ الكود
$OMAR=$bn->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($OMAR);
?>