<?php
include_once 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    echo $name;
} else {
    
}
?>