<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include("connect.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['gia_sp'] * $item['quantity'];
}

$message = "";
$messageClass = "";
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $address = trim($_POST['address'] ?? '');

    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $message = 'Vui lòng điền đầy đủ thông tin giao hàng.';
        $messageClass = 'alert-error';
    } elseif (empty($_SESSION['cart'])) {
        $message = 'Giỏ hàng trống, không thể tiến hành thanh toán.';
        $messageClass = 'alert-error';
    } else {
        $_SESSION['cart'] = [];
        $message = 'Đơn hàng của bạn đã được đặt thành công! Chúng tôi sẽ liên hệ bạn sớm nhất.';
        $messageClass = 'alert-success';
        $success = true;
    }
}
?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thanh toán - QuangAnh Shop</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include("header.php"); ?>
<div class="page-shell">
  <nav class="breadcrumb">
    <a href="index.php">Trang chủ</a>
    <span>/</span>
    <span>Thanh toán</span>
  </nav>
  <div class="section-title">
    <h2>Thanh toán</h2>
    <span class="section-description">Hoàn tất đơn hàng và nhận sản phẩm nhanh chóng.</span>
  </div>

  <?php if ($message): ?>
    <div class="alert <?php echo $messageClass; ?>"><?php echo htmlspecialchars($message); ?></div>
  <?php endif; ?>

  <?php if ($success): ?>
    <div class="card card-body">
      <h3>Xin cảm ơn!</h3>
      <p>Đơn hàng đã được ghi nhận. Hãy chờ nhân viên liên hệ để xác nhận đơn hàng và vận chuyển.</p>
      <a class="btn btn-primary" href="index.php">Quay về trang chủ</a>
    </div>
  <?php else: ?>
    <?php if (!empty($_SESSION['cart'])): ?>
      <div class="grid grid-2">
        <div class="card card-body">
          <h3>Thông tin giao hàng</h3>
          <form method="POST" class="form-card">
            <div class="form-group">
              <label for="name">Họ và tên</label>
              <input id="name" name="name" type="text" placeholder="Nhập họ và tên" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" placeholder="Nhập email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
              <label for="phone">Số điện thoại</label>
              <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required>
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ giao hàng</label>
              <textarea id="address" name="address" rows="5" placeholder="Nhập địa chỉ nhận hàng" required><?php echo htmlspecialchars($_POST['address'] ?? ''); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Hoàn tất thanh toán</button>
          </form>
        </div>

        <div class="card card-body checkout-summary">
          <h3>Đơn hàng của bạn</h3>
          <div class="table-cart" style="border:none;">
            <div style="display:grid; gap:14px;">
            <?php foreach ($_SESSION['cart'] as $item): ?>
              <div style="display:grid; grid-template-columns: 80px 1fr; gap: 14px; align-items:center;">
                <img src="<?php echo htmlspecialchars($item['anh_sp']); ?>" alt="<?php echo htmlspecialchars($item['ten_sp']); ?>">
                <div>
                  <strong><?php echo htmlspecialchars($item['ten_sp']); ?></strong>
                  <p style="margin: 6px 0 0; color: var(--text-muted);">
                    <?php echo number_format($item['gia_sp']); ?> VNĐ × <?php echo intval($item['quantity']); ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
          <div class="cart-summary" style="margin-top:18px;">
            <h3 style="margin-bottom:8px;">Tổng</h3>
            <p style="font-size: 1.4rem; font-weight: 700; margin:0;"><?php echo number_format($total); ?> VNĐ</p>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="empty-state">
        Giỏ hàng trống, vui lòng thêm sản phẩm trước khi thanh toán.
      </div>
    <?php endif; ?>
  <?php endif; ?>
</div>
<?php include("footer.php"); ?>
</body>
</html>