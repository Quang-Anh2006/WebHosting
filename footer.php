<!-- FOOTER -->
<style>
.footer{
    background: linear-gradient(180deg, #2E7D32 0%, #1B5E20 100%);
    color: #E8F5E9;
    padding: 35px 8%;
    margin-top: 30px;
    font-family: Arial, sans-serif;
}

.footer-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
    gap: 22px;
}

.footer-logo h2{
    color: #C8E6C9;
    margin-bottom: 10px;
}

.footer-logo p{
    color: #D7FFD9;
    line-height: 1.6;
    margin: 0;
}

.footer-box h3{
    color: #AED581;
    margin-bottom: 12px;
}

.footer-box ul{
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-box ul li{
    margin-bottom: 8px;
}

.footer-box ul li a{
    color: #D7FFD9;
    text-decoration: none;
    transition: 0.2s;
}

.footer-box ul li a:hover{
    color: #FFFFFF;
    padding-left: 4px;
}

.footer-contact p{
    color: #D7FFD9;
    margin-bottom: 8px;
}

.footer-social{
    margin-top: 10px;
}

.footer-social a{
    display: inline-flex;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.12);
    color: #FFFFFF;
    margin-right: 8px;
    transition: 0.2s;
    text-decoration: none;
    font-size: 16px;
}

.footer-social a:hover{
    background: #81C784;
    color: #ffffff;
    transform: translateY(-3px);
}

.footer-bottom{
    text-align: center;
    margin-top: 30px;
    padding-top: 16px;
    border-top: 1px solid rgba(255,255,255,0.15);
    color: #C8E6C9;
    font-size: 13px;
}

@media(max-width:768px){
    .footer{
        padding: 30px 18px;
    }
}
</style>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-logo">
            <h2>QuangAnh Shop</h2>
            <p>
                Mua sắm thông minh, giao hàng nhanh và dịch vụ khách hàng tận tâm.
            </p>
            <div class="footer-social">
                <a href="https://www.facebook.com/qanh117206" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.tiktok.com/@tqa1107206" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://youtube.com/" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/qanh_117206/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Danh mục</h3>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="sanpham.php">Sản phẩm</a></li>
                <li><a href="tintuc.php">Khuyến mãi</a></li>
                <li><a href="dantri.php">Bộ sưu tập</a></li>
                <li><a href="dangnhap.php">Đăng nhập</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h3>Hỗ trợ</h3>
            <ul>
                <li><a href="#" class="footer-action" data-content="privacy">Chính sách bảo mật</a></li>
                <li><a href="#" class="footer-action" data-content="terms">Điều khoản dịch vụ</a></li>
                <li><a href="#" class="footer-action" data-content="guide">Hướng dẫn mua hàng</a></li>
                <li><a href="#" class="footer-action" data-content="payment">Thanh toán</a></li>
            </ul>
        </div>

        <div class="footer-box footer-contact">
            <h3>Liên hệ</h3>
            <p>
                <i class="fas fa-map-marker-alt"></i>
                Hà Nội, Việt Nam
            </p>
            <p>
                <i class="fas fa-phone"></i>
                0369105135
            </p>
            <p>
                <i class="fas fa-envelope"></i>
                tanh11800@gmail.com
            </p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 QuangAnh Shop | All Rights Reserved
    </div>

</footer>

<div class="footer-modal" id="footerModal" aria-hidden="true">
    <div class="footer-modal-content">
        <button class="footer-modal-close" id="footerModalClose" aria-label="Đóng cửa sổ">×</button>
        <h3 id="footerModalTitle">Thông tin hỗ trợ</h3>
        <p id="footerModalBody">Vui lòng chọn mục hỗ trợ để xem chi tiết.</p>
    </div>
</div>

<script>
    const footerContent = {
        privacy: {
            title: 'Chính sách bảo mật',
            body: 'QuangAnh Shop cam kết bảo mật thông tin khách hàng. Chúng tôi chỉ sử dụng dữ liệu để xử lý đơn hàng và hỗ trợ dịch vụ.'
        },
        terms: {
            title: 'Điều khoản dịch vụ',
            body: 'Khi mua hàng tại QuangAnh Shop, khách hàng đồng ý với điều khoản giao dịch, đổi trả và vận chuyển của chúng tôi.'
        },
        guide: {
            title: 'Hướng dẫn mua hàng',
            body: 'Chọn sản phẩm, thêm vào giỏ hàng và thanh toán. Nếu cần hỗ trợ, hãy liên hệ qua chat hoặc số điện thoại trên trang.'
        },
        payment: {
            title: 'Thanh toán',
            body: 'Chúng tôi hỗ trợ thanh toán khi nhận hàng và chuyển khoản ngân hàng. Vui lòng kiểm tra lại thông tin đơn hàng trước khi xác nhận.'
        }
    };

    document.querySelectorAll('.footer-action').forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
            const contentKey = link.dataset.content;
            const content = footerContent[contentKey];
            if (content) {
                document.getElementById('footerModalTitle').textContent = content.title;
                document.getElementById('footerModalBody').textContent = content.body;
                document.getElementById('footerModal').classList.add('active');
                document.getElementById('footerModal').setAttribute('aria-hidden', 'false');
            }
        });
    });

    document.getElementById('footerModalClose').addEventListener('click', () => {
        document.getElementById('footerModal').classList.remove('active');
        document.getElementById('footerModal').setAttribute('aria-hidden', 'true');
    });

    document.getElementById('footerModal').addEventListener('click', event => {
        if (event.target === document.getElementById('footerModal')) {
            document.getElementById('footerModalClose').click();
        }
    });
</script>

<style>
.footer-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.62);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 24px;
    z-index: 9999;
}

.footer-modal.active {
    display: flex;
}

.footer-modal-content {
    background: #1c5f22;
    color: #f1f8ee;
    border-radius: 14px;
    max-width: 520px;
    width: 100%;
    padding: 28px;
    box-shadow: 0 18px 50px rgba(0, 0, 0, 0.28);
    position: relative;
}

.footer-modal-close {
    position: absolute;
    top: 14px;
    right: 14px;
    border: none;
    background: #ffffff22;
    color: #fff;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    font-size: 22px;
    cursor: pointer;
}

.footer-modal-close:hover {
    background: #ffffff33;
}

.footer-modal-content h3 {
    margin-top: 0;
    margin-bottom: 14px;
}

.footer-modal-content p {
    line-height: 1.8;
}
</style>