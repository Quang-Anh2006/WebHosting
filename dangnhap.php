<?php
session_start();
include("connect.php");

$message = "";

if(isset($_POST['dangnhap']))
{
    $tentk = trim($_POST['tentk']);
    $mk = trim($_POST['mk']);

    if(empty($tentk) || empty($mk))
    {
        $message = "Vui lòng nhập đầy đủ thông tin!";
    }
    else
    {
        $sql = $conn->prepare("SELECT * FROM taikhoan WHERE tentk=?");
        $sql->bind_param("s", $tentk);
        $sql->execute();

        $result = $sql->get_result();

        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();

            // Kiểm tra mật khẩu đã mã hóa
            if(password_verify($mk, $row['mk']))
            {
                $_SESSION['tentk'] = $row['tentk'];

                header("Location: index.php");
                exit();
            }
            else
            {
                $message = "Sai mật khẩu!";
            }
        }
        else
        {
            $message = "Tài khoản không tồn tại!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng Nhập Hệ Thống</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0f172a,#1e293b,#334155);
}

.login-box{
    width:420px;
    padding:40px;
    border-radius:20px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 10px 30px rgba(0,0,0,.4);
}

.logo{
    text-align:center;
    margin-bottom:25px;
}

.logo h1{
    color:#fff;
    font-size:30px;
}

.logo p{
    color:#cbd5e1;
    margin-top:5px;
}

.input-group{
    margin-bottom:18px;
}

.input-group label{
    color:#e2e8f0;
    display:block;
    margin-bottom:6px;
}

.input-group input{
    width:100%;
    padding:13px;
    border:none;
    outline:none;
    border-radius:10px;
    background:#f8fafc;
    font-size:15px;
}

.btn-login{
    width:100%;
    padding:13px;
    border:none;
    border-radius:10px;
    background:#2563eb;
    color:#fff;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-login:hover{
    background:#1d4ed8;
}

.error{
    text-align:center;
    margin-bottom:15px;
    color:#f87171;
    font-weight:bold;
}

.footer{
    margin-top:18px;
    text-align:center;
    color:#cbd5e1;
}

.footer a{
    color:#60a5fa;
    text-decoration:none;
}

.footer a:hover{
    text-decoration:underline;
}

</style>
</head>

<body>

<div class="login-box">

    <div class="logo">
        <h1>ĐĂNG NHẬP</h1>
        <p>Hệ thống quản lý tài khoản</p>
    </div>

    <?php
    if($message != "")
    {
        echo "<div class='error'>$message</div>";
    }
    ?>

    <form method="POST">

        <div class="input-group">
            <label>Tên tài khoản</label>
            <input type="text" name="tentk" placeholder="Nhập tên tài khoản" required>
        </div>

        <div class="input-group">
            <label>Mật khẩu</label>
            <input type="password" name="mk" placeholder="Nhập mật khẩu" required>
        </div>

        <button type="submit" name="dangnhap" class="btn-login">
            Đăng Nhập
        </button>

    </form>

    <div class="footer">
        Chưa có tài khoản?
        <a href="dangky.php">Đăng ký ngay</a>
    </div>

</div>

</body>
</html>