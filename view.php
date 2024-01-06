<?php
include "../connect.php";
$id=filterRequest("id_merch");


$stmt=$con->prepare("SELECT * FROM `user_merchant` where `id_merch`=?
");


$stmt->execute(array($id));

$data =$stmt->fetch(PDO::FETCH_ASSOC);

$count=$stmt->rowCount();

if($count>0){
    echo json_encode(array("status"=>"success","data"=>$data));
}else{
    echo json_encode(array("status"=>"fail"));

}
?>


