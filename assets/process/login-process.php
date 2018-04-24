<?php
include_once 'connection.php';

if(isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);
    echo $password;
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
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['userName'] = $username;
        }
        header("Location: /ShoppingWeb20172/index.php");
    }
    else {
        echo "Invalid password!";
    }
}
?>   