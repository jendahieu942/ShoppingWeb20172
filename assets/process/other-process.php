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
    $sqlcmd = "Select * from product where supplier = 'OPPO' OR supplier = 'Xiaomi' OR supplier = 'Huawei' OR supplier = 'Vivo'";
    $result = $connect->query($sqlcmd);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($data,$row);
        }
    }
    $files = json_encode($data);
    echo $files;
}
mysqli_close($connect);
?>