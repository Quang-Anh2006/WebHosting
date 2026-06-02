<?php
include("connect.php");

$message = "";

if(isset($_POST['dangky']))
{
    $tentk = trim($_POST['tentk']);
    $mk = trim($_POST['mk']);
    $nhaplaimk = trim($_POST['nhaplaimk']);

    if(empty($tentk) || empty($mk) || empty($nhaplaimk))
    {
        $message = "Vui lòng nhập đầy đủ thông tin!";
    }
    elseif($mk != $nhaplaimk)
    {
        $message = "Mật khẩu nhập lại không khớp!";
    }
    else
    {
        // Kiểm tra tài khoản đã tồn tại
        $check = $conn->prepare("SELECT * FROM taikhoan WHERE tentk=?");
        $check->bind_param("s", $tentk);
        $check->execute();
        $result = $check->get_result();

        if($result->num_rows > 0)
        {
            $message = "Tên tài khoản đã tồn tại!";
        }
        else
        {
            // Mã hóa mật khẩu
            $hash_password = password_hash($mk, PASSWORD_DEFAULT);

            $sql = $conn->prepare("INSERT INTO taikhoan(tentk,mk) VALUES (?,?)");
            $sql->bind_param("ss", $tentk, $hash_password);

            if($sql->execute())
            {
                $message = "Đăng ký thành công!";
            }
            else
            {
                $message = "Đăng ký thất bại!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng Ký Tài Khoản</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0f172a,#1e293b,#334155);
}

.register-box{
    width:420px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.1);
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

.register-box h2{
    color:#fff;
    text-align:center;
    margin-bottom:25px;
}

.input-box{
    margin-bottom:18px;
}

.input-box label{
    color:#ddd;
    display:block;
    margin-bottom:6px;
    font-size:14px;
}

.input-box input{
    width:100%;
    padding:12px;
    border:none;
    outline:none;
    border-radius:10px;
    background:#f1f5f9;
    font-size:15px;
}

.btn-register{
    width:100%;
    padding:13px;
    border:none;
    border-radius:10px;
    background:#3b82f6;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-register:hover{
    background:#2563eb;
}

.message{
    text-align:center;
    margin-bottom:15px;
    color:#22c55e;
    font-weight:bold;
}

.footer{
    text-align:center;
    margin-top:15px;
    color:#ddd;
}

.footer a{
    color:#60a5fa;
    text-decoration:none;
}
</style>
</head>
<body>

<div class="register-box">
    <h2>Đăng Ký Tài Khoản</h2>

    <?php
    if($message != ""){
        echo "<div class='message'>$message</div>";
    }
    ?>

    <form method="POST">
        <div class="input-box">
            <label>Tên tài khoản</label>
            <input type="text" name="tentk" required>
        </div>

        <div class="input-box">
            <label>Mật khẩu</label>
            <input type="password" name="mk" required>
        </div>

        <div class="input-box">
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="nhaplaimk" required>
        </div>

        <button type="submit" name="dangky" class="btn-register">
            Đăng Ký
        </button>
    </form>

    <div class="footer">
        Đã có tài khoản?
        <a href="dangnhap.php">Đăng nhập</a>
    </div>
</div>

</body>
</html>