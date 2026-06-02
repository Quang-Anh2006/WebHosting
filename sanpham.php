<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	.product-container {
    display: flex;
    justify-content: center;
    gap: 23px;
}

.product {
    background: #fff;
    padding: 15px;
    width: 200px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.product h3 {
    font-size: 16px;
    margin: 10px 0;
}
	.ten:hover{
		color: grey;
	}
	.anh:hover{
		 box-shadow: 0 0 10px rgba(0,0,0,0.1);
	}
	</style>
<body>
	<h1 align="center"> SẢN PHẨM NỔI BẬT</h1>
	<div class="product_container">
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "th2915";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham LIMIT 5";
$result = $conn->query($sql);
?>
    <div class="product-container">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
        <div class="product">
		
		<img class="anh" src="<?php echo $row['anh_sp']?>">
		<h3 class="ten"> <?php echo $row['ten_sp']?></h3>
		<b style="color: red"><?php echo number_format($row['gia_sp']); ?> VNĐ</b>
		</div>
	<?php
        }
    } else {
        echo "Không có sản phẩm";
    }
    ?>
</div>
			
</body>
</html>