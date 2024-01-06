<?php 

$dsn ="mysql:host=localhost;dbname=u854802121_food";
$username="omar2024";//root
$password="Omar@259779";
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" //for arabic
);try{
    $con=new PDO($dsn,$username,$password,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    include "function.php";
}catch(PDOException $e){
echo $e->getMessage();
}
?>