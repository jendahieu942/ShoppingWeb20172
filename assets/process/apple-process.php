<?php
$server = "localhost";
$user   = "root";
$pass   = "12345";
$dbname = "shoppingweb";
$data = array();

$connect = new mysqli($server,$user,$pass,$dbname);
if ($connect->connect_error) {
    die("Fail while trying connect to server ".$connect->connect_error);
} else {
    $sqlcmd = "Select * from product where supplier = 'Apple'";
    $result = $connect->query($sqlcmd);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data.array_push($data,$row);
        }
    }

    $file = json_encode($data);
    echo  $file;


}
mysqli_close($connect);
?>