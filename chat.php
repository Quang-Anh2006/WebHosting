<!-- CHAT POPUP SUPPORT -->
<style>
/* Nút chat */
#chat-toggle {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2e7d32, #4caf50);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 8px 25px rgba(46, 125, 50, 0.25);
    z-index: 9999;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

#chat-toggle:hover{
    transform: scale(1.08);
}

#chat-toggle img{
    width: 36px;
    height: 36px;
    filter: brightness(0) invert(1);
}

/* Khung chat */
#chat-popup{
    position: fixed;
    bottom: 95px;
    right: 20px;
    width: 360px;
    max-width: 95%;
    background: #ffffff;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 45px rgba(0,0,0,0.18);
    z-index: 9999;
    display: none;
    animation: chatShow 0.3s ease;
    border: 2px solid rgba(76, 175, 80, 0.35);
}

@keyframes chatShow{
    from{
        opacity: 0;
        transform: translateY(20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

.chat-header{
    background: linear-gradient(135deg, #4caf50 0%, #dcedc8 100%);
    padding: 16px 18px;
    font-weight: 700;
    font-size: 17px;
    color: #1b5e20;
    position: relative;
}

.close-chat{
    position: absolute;
    right: 16px;
    top: 14px;
    font-size: 24px;
    cursor: pointer;
    color: #1b5e20;
}

.chat-body{
    padding: 18px;
}

.chat-body p{
    margin-bottom: 16px;
    color: #314e37;
    font-size: 14px;
    line-height: 1.65;
}

.chat-body input,
.chat-body textarea{
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 12px;
    border: 1px solid #c8e6c9;
    border-radius: 12px;
    outline: none;
    font-size: 14px;
    box-sizing: border-box;
}

.chat-body textarea{
    height: 90px;
    resize: none;
}

.chat-body button{
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 12px;
    background: #2e7d32;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s ease;
}

.chat-body button:hover{
    background: #1b5e20;
}

.chat-response{
    display: none;
    padding: 14px 16px;
    margin-top: 10px;
    border-radius: 12px;
    background: #e8f5e9;
    color: #2e5130;
    font-size: 14px;
}

.chat-response.visible{
    display: block;
}
</style>

<!-- NÚT CHAT -->
<div id="chat-toggle" aria-label="Mở chat hỗ trợ">
    <img src="https://cdn-icons-png.flaticon.com/512/2462/2462719.png" alt="Chat icon">
</div>

<!-- KHUNG CHAT -->
<div id="chat-popup" aria-hidden="true">
    <div class="chat-header">
        Hỗ trợ khách hàng
        <span class="close-chat" aria-label="Đóng chat">&times;</span>
    </div>
    <div class="chat-body">
        <p>Xin chào 👋<br>Chúng tôi luôn sẵn sàng hỗ trợ, hãy gửi yêu cầu của bạn ngay bây giờ.</p>
        <form id="chat-form">
            <input type="text" id="chat-name" placeholder="Họ và tên" required>
            <input type="tel" id="chat-phone" placeholder="Số điện thoại" required>
            <input type="email" id="chat-email" placeholder="Email" required>
            <textarea id="chat-message" placeholder="Bạn cần hỗ trợ gì...?" required></textarea>
            <button type="submit">Gửi thông tin</button>
        </form>
        <div id="chat-response" class="chat-response">Cảm ơn bạn! Chúng tôi đã nhận yêu cầu và sẽ liên hệ lại sớm nhất.</div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script>
(function() {
    var chatToggle = document.getElementById('chat-toggle');
    var chatPopup = document.getElementById('chat-popup');
    var chatClose = document.querySelector('.close-chat');
    var chatForm = document.getElementById('chat-form');
    var chatResponse = document.getElementById('chat-response');

    function openChat() {
        chatPopup.style.display = 'block';
        chatPopup.setAttribute('aria-hidden', 'false');
    }

    function closeChat() {
        chatPopup.style.display = 'none';
        chatPopup.setAttribute('aria-hidden', 'true');
    }

    function showAutoChat() {
        if (!sessionStorage.getItem('quanganhChatShown')) {
            setTimeout(openChat, 9000);
            sessionStorage.setItem('quanganhChatShown', '1');
        }
    }

    chatToggle.addEventListener('click', function() {
        openChat();
    });

    chatClose.addEventListener('click', function() {
        closeChat();
    });

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();
        chatForm.reset();
        chatResponse.classList.add('visible');
        setTimeout(function() {
            chatResponse.classList.remove('visible');
            closeChat();
        }, 4200);
    });

    window.addEventListener('load', function() {
        showAutoChat();
    });
})();
</script>