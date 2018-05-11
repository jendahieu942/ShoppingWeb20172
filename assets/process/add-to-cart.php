<?php
session_start();
if(isset($_SESSION['userName'])){
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $response = array("error"=>0);
    array_push($response,array("id"=>$id,"quantity"=>$quantity));
    
    $file = json_encode($response);
    echo $file;
} else {
    $file = json_encode(array("error"=>1));
    echo $file;
}
?>