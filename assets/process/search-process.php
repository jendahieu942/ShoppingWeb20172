<?php
include 'connection.php';
$text = $_POST['textsearch']; 

$sql = "SELECT * FROM product WHERE proName LIKE '%".$text."%' OR supplier LIKE '%".$text."%'";

$result = mysqli_query($conn,$sql);
$data = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($data,$row);
    }
}
$file = json_encode($data);
echo $file;
?>