<?php

declare(strict_types=1);

echo "Forget Password Page";
?>
<link rel="stylesheet" href="asset/css/style.css">
<div class="form-forget-password">
    <form action="#" onsubmit="return KiemTra()" method="post" class="form-forget">
        <div class="img-forget-password">
            <img src="asset/icons/forgot.png" alt="img-forget">
        </div>
        <h3>Quên mật khẩu</h3>
        <div class="enter-email">
            <div class="form-input-forget form-group">
                <label for="email">Nhập địa chỉ email</label> <br>
                <input placeholder="Vui lòng nhập địa chỉ email" type="email" class="input-email" name="email">
                <div id="error4" class="error"></div>
            </div>
            <div class="form-input-forget form-group">
                <button class="btn-forget">Lấy lại mật khẩu</button>
            </div>
        </div>
    </form>
</div>
<svg class="circle" viewBox="0 0 512 768" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="864.5" cy="351.5" r="864.5" fill="#91B6F9" />
</svg>
<script src="asset/resgist.js"></script>