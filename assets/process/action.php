<?php
header('Content-type: application/json');

$connect = mysqli_connect("localhost","root","12345","shoppingweb");
if($connect->connect_error){
    die("Connection failed: ".$connect->connect_error);
}
if(!empty($_POST)){
    $fname = mysql_real_escape_string($connect,$_POST['firstname']);
    $lname = mysql_real_escape_string($connect,$_POST['lastname']);
    $bday = mysql_real_escape_string($connect,$_POST['birthday']);
    $email = mysql_real_escape_string($connect,$_POST['email']);
    $uname = mysql_real_escape_string($connect,$_POST['username']);
    $pass = mysql_real_escape_string($connect,$_POST['password']);
    
    $hashed_password = hash('sha256',$pass);

    $sqlcmd = 'INSERT INTO user (firstName,lastName,email,dateOfBirth,userName,userPassword)
                VALUES ("$fname","$lname","$email","$bday","$uname","$hashed_password")';
    if(mysqli_query($connect,$sqlcmd)){
        $response['status'] = 'success';
        $response['message'] = '<span class="glyphicon glyphicon-ok"><span>&nbsp; Registered successfully, you may login now';
    } else {
        $response['status'] = 'error';
        $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
    }
}

echo json_encode($response);
mysqli_close($connect);
?>