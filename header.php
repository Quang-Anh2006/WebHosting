<div class="header">
  <div class="topnav">
    <a class="topnav__brand" href="index.php"><i class="fas fa-shopping-bag"></i>QuangAnh Shop</a>
    <button class="topnav__toggle" id="topnavToggle" aria-label="Mở menu">
      <i class="fas fa-bars"></i>
    </button>
    <div class="topnav-links" id="topnavLinks">
      <a class="active" href="index.php"><i class="fas fa-home"></i>Trang chủ</a>
      <a href="sanpham.php"><i class="fas fa-tags"></i>Sản phẩm</a>
      <a href="tintuc.php"><i class="fas fa-percent"></i>Khuyến mãi</a>
      <a href="dantri.php"><i class="fas fa-th-large"></i>Bộ sưu tập</a>
      <a class="topnav__cta topnav__cta--secondary" href="cart.php"><i class="fas fa-shopping-cart"></i>Giỏ hàng<?php $cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0; if ($cartCount > 0) echo ' <span class="topnav__badge">'. $cartCount .'</span>'; ?></a>
      <a class="topnav__cta topnav__cta--secondary" href="dangnhap.php"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
      <a class="topnav__cta topnav__cta--primary" href="dangky.php"><i class="fas fa-user-plus"></i>Đăng ký</a>
    </div>
    <div class="topnav__search">
      <form action="sanpham.php" method="GET">
        <input type="text" name="search" placeholder="Tìm sản phẩm..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      </form>
    </div>
  </div>
</div>
<script>
  document.getElementById('topnavToggle').addEventListener('click', function() {
    document.getElementById('topnavLinks').classList.toggle('topnav-links--open');
  });
</script>