<?php
require_once('connection.php');

if(isset($_POST['username'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $birthday = date('Y-m-d', strtotime($_POST['birthday']));
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $data = array();
    $sql = "SELECT * FROM user WHERE userName = '$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        $error = array("error" => "Error: user account already in use");
        array_push($data,$error);
    } else {
        $error = array("error" => "no_error");
        array_push($data,$error);
        $sql = "INSERT INTO user(firstName,lastName,email,phoneNumber,dateOfBirth,address,userName,userPassword,role)";
        $sql .= "VALUES('$fname','$lname','$email','$phone','$birthday','$address','$username','$password','0')";
        
        $result = mysqli_query($conn,$sql);
        if($result){
            $status = array("status" => "Success");
            array_push($data,$status);
        } else {
            $status = array("status" => "false");
            array_push($data,$status);
        }
    }
    $file = json_encode($data);
    echo $file;
}
?>