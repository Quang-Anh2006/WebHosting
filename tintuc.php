<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Khuyến mãi - QuangAnh Shop</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #eef5ef;
  color: #1d3c28;
}
.page-shell {
  max-width: 1180px;
  margin: 0 auto;
  padding: 28px 20px 40px;
}
.page-header {
  text-align: center;
  margin-bottom: 32px;
}
.page-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 10px 18px;
  background: #4caf50;
  color: #ffffff;
  border-radius: 999px;
  font-size: 0.95rem;
}
.page-header h1 {
  margin: 18px auto 10px;
  font-size: clamp(2rem, 2.4vw, 2.6rem);
  color: #16351f;
}
.page-header p {
  margin: 0 auto;
  max-width: 760px;
  color: #506b58;
  line-height: 1.7;
  font-size: 1rem;
}
.promo-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 24px;
}
.promo-card {
  background: #ffffff;
  border-radius: 24px;
  overflow: hidden;
  border: 1px solid rgba(76, 175, 80, 0.12);
  box-shadow: 0 18px 40px rgba(18, 48, 22, 0.08);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.promo-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 24px 50px rgba(18, 48, 22, 0.12);
}
.promo-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
}
.promo-card-content {
  padding: 22px;
  display: grid;
  gap: 14px;
}
.promo-title {
  margin: 0;
  font-size: 1.15rem;
  color: #16351f;
}
.promo-price {
  margin: 0;
  font-size: 1.1rem;
  font-weight: 700;
  color: #388e3c;
}
.promo-price del {
  color: #888;
  font-size: 0.95rem;
  margin-left: 8px;
}
.promo-label {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 14px;
  border-radius: 999px;
  background: #e8f5e9;
  color: #2e7d32;
  font-weight: 700;
  width: fit-content;
}
.promo-actions {
  display: flex;
  justify-content: flex-start;
}
.promo-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 18px;
  border-radius: 999px;
  background: #4caf50;
  color: #ffffff;
  text-decoration: none;
  font-size: 0.95rem;
  transition: background 0.2s ease, transform 0.2s ease;
}
.promo-btn:hover {
  background: #388e3c;
  transform: translateY(-1px);
}
.empty-state {
  padding: 28px;
  text-align: center;
  color: #557158;
  background: #ffffff;
  border-radius: 24px;
  box-shadow: 0 16px 40px rgba(18, 48, 22, 0.06);
}
@media (max-width: 720px) {
  .page-shell {
    padding: 18px 14px 32px;
  }
}
</style>
</head>
<body>
<?php include("header.php"); ?>
<div class="page-shell">
  <div class="page-header">
    <span class="page-label"><i class="fas fa-tags"></i>Khuyến mãi</span>
    <h1>Ưu đãi hấp dẫn mỗi ngày</h1>
    <p>Những sản phẩm giảm giá đặc biệt, được chọn lọc dành riêng cho khách hàng mua sắm thông minh.</p>
  </div>
  <div class="promo-grid">
    <?php
    include("connect.php");
    $sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $discount = rand(10, 35);
        $price = floatval($row['gia_sp']);
        $salePrice = $price - round($price * $discount / 100);
    ?>
    <article class="promo-card">
      <img src="<?php echo htmlspecialchars($row['anh_sp']); ?>" alt="<?php echo htmlspecialchars($row['ten_sp']); ?>">
      <div class="promo-card-content">
        <span class="promo-label"><?php echo $discount; ?>% GIẢM</span>
        <h2 class="promo-title"><?php echo htmlspecialchars($row['ten_sp']); ?></h2>
        <p class="promo-price">
          <?php echo number_format($salePrice); ?> VNĐ
          <del><?php echo number_format($price); ?> VNĐ</del>
        </p>
        <div class="promo-actions">
          <a href="sanpham.php" class="promo-btn">Mua ngay</a>
        </div>
      </div>
    </article>
    <?php
      }
    } else {
      echo '<div class="empty-state">Hiện chưa có khuyến mãi. Vui lòng quay lại sau.</div>';
    }
    $conn->close();
    ?>
  </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
