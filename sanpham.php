<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sản phẩm - QuangAnh Shop</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include("header.php"); ?>
<div class="page-shell">
  <header class="page-banner">
    <span class="page-label"><i class="fas fa-tags"></i>Danh mục sản phẩm</span>
    <h1>Khám phá bộ sưu tập sản phẩm tốt nhất</h1>
    <p>Chọn ngay sản phẩm phù hợp với nhu cầu của bạn từ các mẫu mới và ưu đãi hấp dẫn.</p>
  </header>

  <section class="product-grid">
  <?php
  include("connect.php");

  $search = isset($_GET['search']) ? trim($_GET['search']) : '';
  if ($search !== '') {
      $stmt = $conn->prepare("SELECT ten_sp, anh_sp, gia_sp FROM sanpham WHERE ten_sp LIKE ? LIMIT 12");
      $like = "%" . $search . "%";
      $stmt->bind_param("s", $like);
      $stmt->execute();
      $result = $stmt->get_result();
  } else {
      $sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham LIMIT 12";
      $result = $conn->query($sql);
  }

  if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
  ?>
    <article class="product-card">
      <img src="<?php echo htmlspecialchars($row['anh_sp']); ?>" alt="<?php echo htmlspecialchars($row['ten_sp']); ?>">
      <div class="product-card-content">
        <h2 class="product-title"><?php echo htmlspecialchars($row['ten_sp']); ?></h2>
        <p class="product-price"><?php echo number_format($row['gia_sp']); ?> VNĐ</p>
        <div class="product-actions">
          <a href="product-detail.php?name=<?php echo urlencode($row['ten_sp']); ?>" class="product-btn">Xem chi tiết</a>
          <a href="cart.php?action=add&name=<?php echo urlencode($row['ten_sp']); ?>" class="product-btn">Thêm vào giỏ</a>
        </div>
      </div>
    </article>
  <?php
      }
  } else {
      echo '<div class="empty-state">Hiện không có sản phẩm nào. Vui lòng quay lại sau.</div>';
  }
  $conn->close();
  ?>
  </section>
</div>
<?php include("footer.php"); ?>
</body>
</html>
