<?php
if (session_status() === PHP_SESSION_NONE) session_start();
include("connect.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$message = "";

define('CART', 'cart');

if (isset($_GET['action']) && isset($_GET['name'])) {
    $name = urldecode($_GET['name']);

    if ($_GET['action'] === 'add') {
        $stmt = $conn->prepare("SELECT ten_sp, anh_sp, gia_sp FROM sanpham WHERE ten_sp = ? LIMIT 1");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            $item = $result->fetch_assoc();
            if (!isset($_SESSION['cart'][$name])) {
                $_SESSION['cart'][$name] = [
                    'ten_sp' => $item['ten_sp'],
                    'anh_sp' => $item['anh_sp'],
                    'gia_sp' => $item['gia_sp'],
                    'quantity' => 1
                ];
            } else {
                $_SESSION['cart'][$name]['quantity'] += 1;
            }
            $message = 'Đã thêm vào giỏ hàng.';
        } else {
            $message = 'Không tìm thấy sản phẩm.';
        }
        $stmt->close();
    }

    if ($_GET['action'] === 'remove') {
        if (isset($_SESSION['cart'][$name])) {
            unset($_SESSION['cart'][$name]);
            $message = 'Đã xóa sản phẩm khỏi giỏ hàng.';
        }
    }
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['gia_sp'] * $item['quantity'];
}
?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Giỏ hàng - QuangAnh Shop</title>
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
    <span>Giỏ hàng</span>
  </nav>
  <div class="section-title">
    <h2>Giỏ hàng của bạn</h2>
    <span class="section-description">Xem lại đơn hàng, thay đổi số lượng hoặc tiếp tục mua sắm.</span>
  </div>

  <?php if ($message): ?>
    <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
  <?php endif; ?>

  <?php if (!empty($_SESSION['cart'])): ?>
    <div class="table-responsive">
      <table class="table-cart">
        <thead>
          <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($_SESSION['cart'] as $item): ?>
            <tr>
              <td>
                <div style="display:flex; gap:14px; align-items:center;">
                  <img src="<?php echo htmlspecialchars($item['anh_sp']); ?>" alt="<?php echo htmlspecialchars($item['ten_sp']); ?>">
                  <div>
                    <strong><?php echo htmlspecialchars($item['ten_sp']); ?></strong>
                  </div>
                </div>
              </td>
              <td><?php echo number_format($item['gia_sp']); ?> VNĐ</td>
              <td><?php echo intval($item['quantity']); ?></td>
              <td><?php echo number_format($item['gia_sp'] * $item['quantity']); ?> VNĐ</td>
              <td><a class="button button-secondary" href="cart.php?action=remove&name=<?php echo urlencode($item['ten_sp']); ?>">Xóa</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="cart-summary">
      <h3>Tổng đơn hàng</h3>
      <p>Thành tiền tạm tính cho các sản phẩm trong giỏ.</p>
      <p style="font-size: 1.4rem; font-weight: 700; margin-top: 10px;"><?php echo number_format($total); ?> VNĐ</p>
      <div class="product-detail-actions" style="margin-top: 16px;">
        <a class="btn btn-primary" href="checkout.php">Thanh toán</a>
        <a class="btn btn-secondary" href="sanpham.php">Tiếp tục mua sắm</a>
      </div>
    </div>
  <?php else: ?>
    <div class="empty-state">
      Giỏ hàng hiện đang trống. Hãy quay lại trang sản phẩm và chọn thêm món đồ yêu thích.
    </div>
  <?php endif; ?>
</div>
<?php include("footer.php"); ?>
</body>
</html>