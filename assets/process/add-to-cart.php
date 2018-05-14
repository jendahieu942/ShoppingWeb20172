<?php
session_start();
include 'connection.php';

if(isset($_SESSION['userName'])){

    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $response = array("error"=>0);
    $userId = $_SESSION['id'];
    // Add to database
    $sql = "INSERT INTO cart(proId,userId,quantity) VALUES($id,$userId,$quantity)";
    $result = mysqli_query($conn,$sql);
    if($result){
        $addStatus = array("addstatus" => "success");
    } else {
        $addStatus = array("addstatus" => "false");
    }

    array_push($response,$addStatus);
    // response to js
    $file = json_encode($response);
    echo $file;
} else {
    $file = json_encode(array("error"=>1));
    echo $file;
}
?>