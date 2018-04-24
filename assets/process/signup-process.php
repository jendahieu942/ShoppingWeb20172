<?php
require_once('connection.php');

if(isset($_POST['signup-btn'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $birthday = date('Y-m-d', strtotime($_POST['birthday']));
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $sql = "INSERT INTO user(firstName,lastName,dateOfBirth,email,userName,userPassword)
            VALUES('$fname','$lname','$birthday','$email','$username','$password')";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: /ShoppingWeb20172/login.php");
    } else {
        echo "Error: ".$sql;
    }
}
?>