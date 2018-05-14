<?php
session_start();

include_once 'connection.php';

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $sql = "SELECT * FROM user WHERE userName = '$username' AND userPassword = '$password'";
        
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['userId'];
            $fname = $row['firstName'];
            $lname = $row['lastName'];
            $email = $row['email'];
            $phone = $row['phoneNumber'];
            $birthday = $row['dateOfBirth'];
            $address = $row['address'];

            $_SESSION['id'] = $id;
            $_SESSION['userName'] = $username;
            $_SESSION['name'] = $fname." ".$lname;
        }
        if(isset($_SESSION['previouspage'])){
            $previous = $_SESSION['previouspage'];
        }else {
            $previous = "/ShoppingWeb20172/index.php";
        }
        $data = array("ok"=>$previous);
        echo json_encode($data);
    }
    else {
        echo json_encode(array("fail"=>"False"));
    }
}
?>   