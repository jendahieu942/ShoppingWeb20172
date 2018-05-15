<?php
session_start();
include_once '../assets/process/connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE proId = '$id'";
    if($result = mysqli_query($conn,$sql)){
        while ($row = $result->fetch_assoc()) {
            $name = $row['proName'];
            $sup = $row['supplier'];
            $scr = explode('-',$row['scrSolution']);
            foreach ($scr as $key => $value) {
                $arr = explode(":",$value);
                $scr[$key] = array($arr[0]=>$arr[1]);
            }
            $storage = $row['storage'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $img = $row['img'];
        }
    } else {

    }
mysqli_close($conn);
$_SESSION['previouspage'] = $_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
    <title id="title" ></title>
    <style>
        .img-product{
            border: 1px solid green;
            border-radius: 10px;
            width: 250px;
            height: 350px;
            position: relative;
            padding: 10px;
        }
        .img-toshow{
            border-radius: 10px;
            width: 230px;
            height: 320px;
        }
        .flex-row-table{
            display: flex;
            flex-wrap: wrap;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<?php include '../view/navbar.php';
?>

<div class="container">
    <div>
    <font size = 6 color = "blue">Here's all information about "<?php echo $name;?>"</font>
    </div>
    <hr/>
    <div class= "row"> 
        <div class = "col-md-3">
            <div class = "img-product" id="image-product">
                <!-- Image display here-->
                <img class="img-toshow" src=<?php echo "'../$img'";?> >
            </div>
        </div>
        <div class = "col-md-9" id = "info-product">
            <ul class="list-group">
            <li class="list-group-item"><strong>Supplier: </strong><?php echo $sup;?></li>
            <li class="list-group-item">
                <table>
                    <?php 
                    foreach ($scr as $key => $value) {
                        echo "<tr>";
                        foreach ($value as $nkey => $nvalue) {
                            echo "<th width=50% style='border-bottom: 1px dotted #b6c0c4;'>".$nkey."</th>";
                            echo "<td style='border-bottom: 1px dotted #b6c0c4;text-align:left'>".$nvalue."</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </li>
            <li class="list-group-item"><strong>Storage: </strong><?php echo $storage;?></li>
            <li class="list-group-item"><strong>Price: $ <?php echo $price;?></strong></li>
            </ul>
            <span>
            <input id="quantity" idproduct=<?=$id?> type="number" value=1 min=1>
            <a class="btn btn-success" id="addtocart"> Add to cart </a>
            <a class="btn btn-default" href="showcart.php">View cart</a>
            </span>
        </div>
    </div>
</div>
<!-- Javascript file-->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
<script src="/ShoppingWeb20172/assets/js/addtocart.js"></script>
</body>
</html>