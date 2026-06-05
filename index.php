<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>QuangAnh Shop - Cửa hàng trực tuyến</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include("header.php"); ?>
<main class="page-shell">
  <section class="hero-banner">
    <span class="badge"><i class="fas fa-star"></i> Cửa hàng thuần mua bán</span>
    <h1>Chào mừng bạn đến với QuangAnh Shop</h1>
    <p>Khám phá ngay bộ sưu tập sản phẩm chất lượng với ưu đãi hấp dẫn, giao hàng nhanh và dịch vụ khách hàng tận tâm.</p>
    <a class="btn btn-primary" href="sanpham.php">Xem sản phẩm nổi bật</a>
  </section>

  <?php include("slide.php"); ?>

  <section style="margin-top: 44px;">
    <div class="section-title">
      <h2>Sản phẩm nổi bật</h2>
      <span class="section-description">Các sản phẩm được yêu thích nhất trong tháng</span>
    </div>
    <div class="product-grid index-row">
      <?php
      include("connect.php");
      $sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham LIMIT 6";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
      ?>
      <article class="product-card">
        <img src="<?php echo htmlspecialchars($row['anh_sp']); ?>" alt="<?php echo htmlspecialchars($row['ten_sp']); ?>">
        <div class="product-card-content">
          <h3 class="product-title"><?php echo htmlspecialchars($row['ten_sp']); ?></h3>
          <p class="product-price"><?php echo number_format($row['gia_sp']); ?> VNĐ</p>
          <div class="product-actions">
            <a href="sanpham.php" class="product-btn">Mua ngay</a>
          </div>
        </div>
      </article>
      <?php
          }
      } else {
          echo '<div class="empty-state">Hiện không có sản phẩm để hiển thị. Vui lòng quay lại sau.</div>';
      }
      $conn->close();
      ?>
    </div>
  </section>

  <section style="margin-top: 40px;">
    <div class="section-title">
      <h2>Vì sao chọn QuangAnh Shop?</h2>
      <span class="section-description">Tiện lợi, an toàn và đáng tin cậy cho mọi đơn hàng.</span>
    </div>
    <div class="feature-grid">
      <article class="feature-card">
        <img src="IMG/slideshow/1.jpg" alt="Giao hàng nhanh">
        <div class="feature-card-content">
          <h3 class="feature-title">Giao hàng nhanh</h3>
          <p>Đặt hàng dễ dàng, vận chuyển nhanh chóng đến tận tay bạn với những đơn vị hỗ trợ uy tín.</p>
        </div>
      </article>
      <article class="feature-card">
        <img src="IMG/slideshow/2.jpg" alt="Sản phẩm chất lượng">
        <div class="feature-card-content">
          <h3 class="feature-title">Sản phẩm chọn lọc</h3>
          <p>Mỗi sản phẩm được chọn lựa cẩn thận để mang lại giá trị tốt nhất cho khách hàng.</p>
        </div>
      </article>
      <article class="feature-card">
        <img src="IMG/slideshow/3.jpg" alt="Hỗ trợ khách hàng">
        <div class="feature-card-content">
          <h3 class="feature-title">Hỗ trợ khách hàng</h3>
          <p>Luôn sẵn sàng giải đáp thắc mắc và hỗ trợ bạn trong mọi bước mua hàng.</p>
        </div>
      </article>
    </div>
  </section>
</main>
<?php include("qc1.php"); ?>
<?php include("chat.php"); ?>
<?php include("footer.php"); ?>
</body>
</html>