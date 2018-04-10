<?php
$server = "localhost";
$user   = "root";
$pass   = "12345";
$dbname = "shoppingweb";
$data   = array();
$response = "";

$connect = new mysqli($server,$user,$pass,$dbname);

if ($connect->connect_error) {
    die("Fail while trying connect to server ".$connect->connect_error);
} else {
    $sqlcmd = "Select * from product";
    $result = $connect->query($sqlcmd);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $data.array_push($data,$row);
        }
    }
    foreach( $data as $row ){
        echo '<div class="col-md-4 text-center col-md-6 col-xs-6">';
            echo '<div class="thumbnail product-box">';
                    echo '<img src="'.$row["img"].'">';
                    echo '<div class="caption">';
                        echo '<h3><a href="#">'.$row["proName"].'</a></h3>';
                        echo '<p>Price: <strong> $'.$row["price"].'</strong></p>';
                    echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
$connect->close();
?>