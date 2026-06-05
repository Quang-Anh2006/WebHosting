<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include("connect.php");

$product = null;
$message = "";

if (isset($_GET['name'])) {
    $name = urldecode($_GET['name']);
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE ten_sp = ? LIMIT 1");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    }
    $stmt->close();
}

if (!$product) {
    $message = "Sản phẩm không tìm thấy. Vui lòng quay lại trang sản phẩm.";
}
?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chi tiết sản phẩm - QuangAnh Shop</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include("header.php"); ?>
<div class="page-shell">
  <?php if ($product): ?>
    <nav class="breadcrumb">
      <a href="index.php">Trang chủ</a>
      <span>/</span>
      <a href="sanpham.php">Sản phẩm</a>
      <span>/</span>
      <span><?php echo htmlspecialchars($product['ten_sp']); ?></span>
    </nav>
    <div class="section-title">
      <h2><?php echo htmlspecialchars($product['ten_sp']); ?></h2>
      <span class="section-description">Chi tiết sản phẩm, giá tốt và nhanh chóng.</span>
    </div>
    <div class="grid grid-2">
      <div class="card">
        <img src="<?php echo htmlspecialchars($product['anh_sp']); ?>" alt="<?php echo htmlspecialchars($product['ten_sp']); ?>">
      </div>
      <div class="card card-body">
        <p class="badge">Sản phẩm đặc sắc</p>
        <h3 class="card-title"><?php echo htmlspecialchars($product['ten_sp']); ?></h3>
        <p class="card-text" style="margin-top: 12px;">
          <?php echo !empty($product['tomtat_sp']) ? htmlspecialchars($product['tomtat_sp']) : 'Mô tả sản phẩm chưa có sẵn. Vui lòng liên hệ để biết thêm chi tiết.'; ?>
        </p>
        <p class="product-detail-price">
          <?php echo number_format($product['gia_sp']); ?> VNĐ
        </p>
        <div class="product-detail-actions">
          <a class="btn btn-primary" href="cart.php?action=add&name=<?php echo urlencode($product['ten_sp']); ?>">
            <i class="fas fa-shopping-cart"></i> Thêm vào giỏ
          </a>
          <a class="btn btn-secondary" href="sanpham.php">Xem thêm sản phẩm</a>
        </div>
      </div>
    </div>
    <div style="margin-top: 32px;">
      <h3>Chi tiết</h3>
      <p class="card-text">
        <?php echo !empty($product['mota_sp']) ? htmlspecialchars($product['mota_sp']) : 'Thông tin chi tiết sẽ cập nhật sớm nhất.'; ?>
      </p>
    </div>
  <?php else: ?>
    <div class="empty-state"><?php echo htmlspecialchars($message); ?></div>
  <?php endif; ?>
</div>
<?php include("footer.php"); ?>
</body>
</html>