<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lookbook - QuangAnh Shop</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
* { box-sizing: border-box; }
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
.page-banner {
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
.page-banner h1 {
  margin: 18px auto 10px;
  font-size: clamp(2rem, 2.4vw, 2.6rem);
  color: #16351f;
}
.page-banner p {
  margin: 0 auto;
  max-width: 760px;
  color: #506b58;
  line-height: 1.7;
  font-size: 1rem;
}
.video-panel {
  background: #ffffff;
  border-radius: 24px;
  overflow: hidden;
  border: 1px solid rgba(76, 175, 80, 0.12);
  box-shadow: 0 18px 40px rgba(18, 48, 22, 0.08);
}
.video-player {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 9;
  background: #000;
}
.video-player video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.video-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,0.15), rgba(0,0,0,0.45));
}
.video-info {
  padding: 28px 30px 30px;
  display: grid;
  gap: 20px;
}
.video-title {
  margin: 0;
  font-size: 1.8rem;
  color: #16351f;
}
.video-description {
  margin: 0;
  color: #4c6453;
  line-height: 1.75;
  font-size: 1rem;
}
.video-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  align-items: center;
}
.video-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 22px;
  border-radius: 999px;
  background: #4caf50;
  color: #ffffff;
  border: none;
  cursor: pointer;
  text-decoration: none;
  font-size: 0.95rem;
  transition: background 0.2s ease, transform 0.2s ease;
}
.video-btn:hover {
  background: #388e3c;
  transform: translateY(-1px);
}
.video-meta {
  color: #6a816f;
  font-size: 0.95rem;
}
.product-preview {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 24px;
  margin-top: 32px;
}
.preview-card {
  background: #ffffff;
  border-radius: 24px;
  overflow: hidden;
  border: 1px solid rgba(76, 175, 80, 0.12);
  box-shadow: 0 18px 40px rgba(18, 48, 22, 0.08);
}
.preview-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.preview-card-content {
  padding: 22px;
}
.preview-card h3 {
  margin: 0 0 10px;
  font-size: 1.1rem;
  color: #16351f;
}
.preview-card p {
  margin: 0;
  color: #556b57;
  line-height: 1.75;
}
.preview-price {
  margin-top: 14px;
  font-size: 1rem;
  font-weight: 700;
  color: #388e3c;
}
@media (max-width: 720px) {
  .page-shell {
    padding: 18px 14px 32px;
  }
  .video-info {
    padding: 22px;
  }
  .video-title {
    font-size: 1.5rem;
  }
}
</style>
</head>
<body>
<?php include("header.php"); ?>
<div class="page-shell">
  <header class="page-banner">
    <span class="page-label"><i class="fas fa-video"></i>Lookbook</span>
    <h1>Giới thiệu sản phẩm nổi bật</h1>
    <p>Xem hình ảnh và video sản phẩm trong không gian mua sắm hiện đại, đồng bộ với phong cách cửa hàng.</p>
  </header>

  <article class="video-panel">
    <div class="video-player">
      <video autoplay muted loop id="myVideo">
        <source src="IMG/video/rain.mp4" type="video/mp4">
      </video>
      <div class="video-overlay"></div>
    </div>
    <div class="video-info">
      <div>
        <h2 class="video-title">Bộ sưu tập xu hướng</h2>
        <p class="video-description">Hãy theo dõi và cảm nhận sản phẩm qua video giới thiệu. Sản phẩm được tuyển chọn để tạo nên phong cách năng động và chất lượng.</p>
      </div>
      <div class="video-actions">
        <a href="sanpham.php" class="video-btn">Mua ngay</a>
        <span class="video-meta">Xem thêm các mẫu bán chạy trong bộ sưu tập.</span>
      </div>
    </div>
  </article>

  <section class="product-preview">
    <?php
    include("connect.php");
    $sql = "SELECT ten_sp, anh_sp, gia_sp FROM sanpham LIMIT 3";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
    <article class="preview-card">
      <img src="<?php echo htmlspecialchars($row['anh_sp']); ?>" alt="<?php echo htmlspecialchars($row['ten_sp']); ?>">
      <div class="preview-card-content">
        <h3><?php echo htmlspecialchars($row['ten_sp']); ?></h3>
        <p>Được chọn để giới thiệu trên lookbook với thiết kế tinh tế và chất lượng tốt.</p>
        <div class="preview-price"><?php echo number_format($row['gia_sp']); ?> VNĐ</div>
      </div>
    </article>
    <?php
      }
    } else {
      echo '<div class="empty-state">Hiện chưa có sản phẩm để hiển thị. Vui lòng thử lại sau.</div>';
    }
    $conn->close();
    ?>
  </section>
</div>
<?php include("footer.php"); ?>
<script>
var video = document.getElementById("myVideo");
function toggleVideo() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}
</script>
</body>
</html>
