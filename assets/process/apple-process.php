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
    foreach( $data as $row ){
        echo '<div class="col-md-3 text-center col-md-6 col-xs-6">';
            echo '<div class="thumbnail product-box redborder">';
                    echo '<img class= "resize" src="'.$row["img"].'">';
                    echo '<div class="caption">';
                        echo '<h4><a href="#">'.$row["proName"].'</a></h4>';
                        echo '<p>Price: <strong> $'.$row["price"].'</strong></p>';
                        echo '<button class="btn btn-success" id="'.$row["proId"].'">Add to cart</button>';
                    echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
mysqli_close($connect);
?>