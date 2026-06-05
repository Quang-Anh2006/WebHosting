<!-- QUẢNG CÁO POPUP -->
<style>
/* Nền mờ */
#ads-overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.72);
    backdrop-filter: blur(6px);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9998;
}

/* Khung quảng cáo */
#ads-box{
    position: relative;
    width: 420px;
    max-width: 92%;
    background: #fff;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 24px 60px rgba(0,0,0,0.32);
    animation: popup 0.35s ease;
}

/* Hiệu ứng hiện */
@keyframes popup{
    from{
        transform: scale(0.75);
        opacity: 0;
    }
    to{
        transform: scale(1);
        opacity: 1;
    }
}

#close-ads{
    position: absolute;
    top: 12px;
    right: 16px;
    font-size: 28px;
    color: #222;
    cursor: pointer;
    font-weight: 700;
    z-index: 2;
}

#ads-box img{
    width: 100%;
    display: block;
    object-fit: cover;
    height: 210px;
}

.ads-content{
    padding: 22px;
    text-align: center;
}

.ads-content h2{
    margin-bottom: 10px;
    color: #d32f2f;
    font-size: 1.7rem;
}

.ads-content p{
    color: #555;
    margin-bottom: 18px;
    line-height: 1.6;
}

.ads-btn{
    display: inline-block;
    padding: 12px 22px;
    background: #d32f2f;
    color: white;
    text-decoration: none;
    border-radius: 999px;
    font-weight: 700;
    transition: background 0.2s ease, transform 0.2s ease;
}

.ads-btn:hover{
    background: #b71c1c;
    transform: translateY(-1px);
}

.ads-footer{
    font-size: 0.9rem;
    color: #777;
    margin-top: 12px;
}
</style>

<!-- HTML QUẢNG CÁO -->
<div id="ads-overlay" aria-hidden="true">
    <div id="ads-box">
        <span id="close-ads" aria-label="Đóng quảng cáo">&times;</span>
        <img src="IMG/slideshow/1.jpg" alt="Khuyến mãi QuangAnh Shop">
        <div class="ads-content">
            <h2>🔥 Ưu đãi chào khách mới</h2>
            <p>Nhận ưu đãi đến 50% cho đơn hàng đầu tiên khi mua sản phẩm hot nhất hôm nay.</p>
            <a href="sanpham.php" class="ads-btn">Khám phá ngay</a>
            <div class="ads-footer">Đóng lại để tiếp tục khám phá sản phẩm.</div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script>
(function() {
    var overlay = document.getElementById('ads-overlay');
    var closeButton = document.getElementById('close-ads');

    function showAd() {
        overlay.style.display = 'flex';
        overlay.setAttribute('aria-hidden', 'false');
    }

    function hideAd() {
        overlay.style.display = 'none';
        overlay.setAttribute('aria-hidden', 'true');
        localStorage.setItem('quanganhAdClosed', '1');
    }

    window.addEventListener('load', function() {
        setTimeout(showAd, 1000);
    });

    closeButton.addEventListener('click', hideAd);
    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            hideAd();
        }
    });
})();
</script>