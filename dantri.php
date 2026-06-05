<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bộ sưu tập - QuangAnh Shop</title>
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
.collection-grid {
  display: grid;
  gap: 24px;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  margin-bottom: 40px;
}
.collection-card {
  background: #ffffff;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 18px 40px rgba(18, 48, 22, 0.08);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.collection-card:hover {
  transform: translateY(-4px);
}
.collection-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}
.collection-card-content {
  padding: 22px;
  display: grid;
  gap: 14px;
}
.collection-title {
  margin: 0;
  font-size: 1.2rem;
  color: #16351f;
}
.collection-description {
  margin: 0;
  color: #556b57;
  line-height: 1.75;
}
.collection-btn {
  display: inline-flex;
  padding: 12px 20px;
  border-radius: 999px;
  background: #4caf50;
  color: #ffffff;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.2s ease, transform 0.2s ease;
}
.collection-btn:hover {
  background: #388e3c;
  transform: translateY(-1px);
}
.feature-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 24px;
}
.feature-card {
  background: #ffffff;
  border-radius: 24px;
  padding: 22px;
  box-shadow: 0 18px 40px rgba(18, 48, 22, 0.08);
}
.feature-card h3 {
  margin-top: 0;
}
.feature-card p {
  color: #556b57;
}
.feature-card img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 18px;
  margin-bottom: 16px;
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
    <span class="page-label"><i class="fas fa-th-large"></i>Bộ sưu tập</span>
    <h1>Khám phá bộ sưu tập chọn lọc</h1>
    <p>Được thiết kế cho từng phong cách và nhu cầu. Mỗi bộ sưu tập là một lựa chọn hoàn hảo cho bạn.</p>
  </div>

  <div class="collection-grid">
    <article class="collection-card">
      <img src="IMG/slide/1.jpg" alt="Bộ sưu tập thời trang">
      <div class="collection-card-content">
        <h2 class="collection-title">Bộ sưu tập phong cách</h2>
        <p class="collection-description">Những sản phẩm thời trang và tiện ích được lựa chọn kỹ càng cho phong cách hàng ngày.</p>
        <a href="sanpham.php" class="collection-btn">Xem ngay</a>
      </div>
    </article>
    <article class="collection-card">
      <img src="IMG/slide/2.jpg" alt="Bộ sưu tập quà tặng">
      <div class="collection-card-content">
        <h2 class="collection-title">Bộ sưu tập quà tặng</h2>
        <p class="collection-description">Gợi ý quà tặng ý nghĩa, chất lượng cho người thân và bạn bè trong mọi dịp.</p>
        <a href="sanpham.php" class="collection-btn">Xem ngay</a>
      </div>
    </article>
    <article class="collection-card">
      <img src="IMG/slide/3.jpg" alt="Bộ sưu tập ưu đãi">
      <div class="collection-card-content">
        <h2 class="collection-title">Bộ sưu tập ưu đãi</h2>
        <p class="collection-description">Săn hàng giảm giá cùng các ưu đãi nóng trên nhiều sản phẩm được yêu thích.</p>
        <a href="tintuc.php" class="collection-btn">Xem ngay</a>
      </div>
    </article>
  </div>

  <div class="page-header" style="margin-top: 40px; text-align: left;">
    <h2 style="margin-bottom: 14px;">Các sản phẩm gợi ý</h2>
    <p class="page-header p">Sản phẩm phù hợp với xu hướng và thỏa mãn nhu cầu của bạn.</p>
  </div>
  <div class="feature-grid">
    <?php
    include("connect.php");
    $sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham LIMIT 8";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
    <article class="feature-card">
      <img src="<?php echo htmlspecialchars($row['anh_sp']); ?>" alt="<?php echo htmlspecialchars($row['ten_sp']); ?>">
      <h3><?php echo htmlspecialchars($row['ten_sp']); ?></h3>
      <p>Giá chỉ <?php echo number_format($row['gia_sp']); ?> VNĐ</p>
    </article>
    <?php
      }
    } else {
      echo '<div class="empty-state">Hiện không có sản phẩm để hiển thị. Vui lòng thử lại sau.</div>';
    }
    $conn->close();
    ?>
  </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
