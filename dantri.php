<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="CSS/dantri.css">
</head>
<body>
	<div id="tintuc">
	<div class="left">
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

$sql = "SELECT ten_tt, anh_tt, tomtat_tt, tacgia_tt FROM tintuc LIMIT 5";
$result = $conn->query($sql);
?>
    <div class="product-container">
    <?php
    if ($result->num_rows > 0) {
        while($tt = $result->fetch_assoc()) {
    ?>
		<div cla="product">
			<h3><?php echo $tt['ten_tt']?></h3>
			<img class="anh" src="<?php echo $tt['anh_tt']?>" width="200px" height="130px">			
			<hr>
		</div>
		<?php
        }
    } 
    ?>		
		</div>
		</div>
	</div>
		<div class="giua">
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

$sql = "SELECT ten_tt, anh_tt, tomtat_tt, tacgia_tt FROM tintuc LIMIT 5";
$result = $conn->query($sql);
?>
    <div class="product-container">
    <?php
    if ($result->num_rows > 0) {
        while($tt = $result->fetch_assoc()) {
    ?>
		<div cla="product">
			<h3><?php echo $tt['ten_tt']?></h3>
			<img class="anh" src="<?php echo $tt['anh_tt']?>" width="100%" height="300px">
			<p><?php echo $tt['tomtat_tt']?></p>
		</div>
		<?php 
		}} 
    ?>
		</div>
			</div>
		</div>
		<div class="right">
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

$sql = "SELECT ten_tt, anh_tt, tomtat_tt, tacgia_tt FROM tintuc LIMIT 5";
$result = $conn->query($sql);
?>
    <div class="product-container">
    <?php
    if ($result->num_rows > 0) {
        while($tt = $result->fetch_assoc()) {
    ?>
		<div cla="product">
			<h3><?php echo $tt['ten_tt']?></h3>
			<img class="anh" src="<?php echo $tt['anh_tt']?>" width="200px" height="130px">
			
		</div>
		<?php
        }
    } 
    ?>
		</div>
			</div>
			</div>
	</div>
</body>
</html>