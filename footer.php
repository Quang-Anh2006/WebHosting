<footer class="footer">
    <div class="footer-container">

        <div class="footer-col">
            <h2>Trần Quang Anh</h2>
            <p>
                Website tin tức, giải trí và quản lý tài khoản được phát triển bằng PHP & MySQL.
            </p>
        </div>

        <div class="footer-col">
            <h3>Liên Kết</h3>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="tintuc.php">Tin tức</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="dangnhap.php">Đăng nhập</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Liên Hệ</h3>
            <p>Email: tanh@gmail.com</p>
            <p>Hotline: 0123 456 789</p>
            <p>Hà Nội, Việt Nam</p>
        </div>

        <div class="footer-col">
            <h3>Theo Dõi</h3>
            <a href="https://www.facebook.com/qanh117206"><i class="fa fa-facebook"></i></a>
            <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
            <a href="https://www.instagram.com/qanh_117206/"><i class="fa fa-instagram"></i></a>
        </div>

    </div>

    <div class="footer-bottom">
        © <?php echo date("Y"); ?> Quang Anh - All Rights Reserved.
    </div>
</footer>

<style>
.footer{
    background:#111827;
    color:white;
    margin-top:50px;
    padding:40px 0 0;
    font-family:Arial, sans-serif;
}

.footer-container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:30px;
}

.footer-col h3{
    margin-bottom:15px;
    color:#3b82f6;
}

.footer-col p,
.footer-col li{
    color:#d1d5db;
    line-height:1.8;
}

.footer-col ul{
    list-style:none;
    padding:0;
}

.footer-col ul li a{
    color:#d1d5db;
    text-decoration:none;
}

.footer-col ul li a:hover{
    color:#3b82f6;
}

.footer-col a{
    color:white;
    margin-right:12px;
    font-size:22px;
    transition:.3s;
}

.footer-col a:hover{
    color:#3b82f6;
}

.footer-bottom{
    text-align:center;
    padding:15px;
    margin-top:30px;
    border-top:1px solid #374151;
    color:#9ca3af;
}
</style>