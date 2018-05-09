<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Show cart Page - G13MobileShop</title>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
</head>
<body>
<!--Nav bar-->
<?php 
    include 'navbar.php';
?>
<!-- Main view-->
<!--Main view end -->
<?php
//session_start();
$server = "localhost";
$user   = "root";
$pass   = "12345";
$dbname = "shoppingweb";
$data = array();

$connect = new mysqli($server,$user,$pass,$dbname);
if ($connect->connect_error) {
    die("Connection failed: ".$connect->connect_error);
} else {
    $sqlcmd = "select product.img, proName, product.price, cart.quantity  FROM cart, product, user WHERE product.proId = cart.proId AND user.userId = cart.userId AND user.userId = 6";
    $result = mysqli_query($connect,$sqlcmd);
//    echo var_dump($result);

    while($row = mysqli_fetch_assoc($result))
    {
        array_push($data,$row);
    }
//    echo $data[0]["img"];
}
mysqli_close($connect);
?>

<div class="col-md-9" style="width: 200%">
    <?php
    //    if(isset($_GET["id"]) && isset($_GET["sl"])){
    //
    //    }
    ?>
    <div class="row" >
        <div class="col-sm-6 col-md-6">
            <h3>Danh sách sản phẩm đã thêm vào giỏ hàng</h3>
            <table class="table table-hover" style="size: 1000px">
                <tr>
                    <th>#</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>giá 1 sản phẩm</th>
                    <th>Số lượng</th>
                    <th>thành tiền</th>
                </tr>
                <?php
                if (!empty($data)){
                    $i =0;
                    foreach ($data as $key => $value){
//                echo var_dump($key['proId']);
                        $i++;


                        ?>
                        <tr>
                            <td>
                                <?php echo $i ?>
                            </td>
                            <td>
                                <?php $a = "../".$data[$key]['img']; ?>
                                <?php echo "<img src=$a alt='anh dien thoai' style='height: 50px'>" ?>
                            </td>
                            <td>
                                <?php echo $data[$key]['proName'] ?>
                            </td>
                            <td>
                                <?php echo $data[$key]["price"] ; ?>
                            </td>
                            <td>
                                <input name="sl_<?php echo $key; ?>" id="sl_<?php echo $key; ?>" value="<?php echo $data[$key]['quantity'] ?>">
                                <a href="javascrip:void(0)" onclick="updateItem(<?php echo $key; ?>)">update</a>
                                <a href="javascrip:void(0)" onclick="deleteItem(<?php echo $key; ?>)" style="color: red">delete</a>
                            </td>
                            <td><?php echo ($data[$key]['price']) * ($data[$key]['quantity']) ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <script>
                function updateItem(id) {
                    alert("id: " + id);
                    // sl = $("#sl_"+id).val();
                    // // alert(sl);
                    // $.get("http://localhost/CODE_BT_CNW/view/showcart&id="+id+"&sl="+sl,  function(data){

                    // });
                }
                function deleteItem(id) {
                    alert("id: "+id);
                }
            </script>
        </div>
    </div>
</div>
<!-- Javascript file-->
<!--Core JavaScript file  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
<!-- /javascript file -->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
</body>
</html>
