<?php

declare(strict_types=1);

echo "Forget Password Page";
?>
<link rel="stylesheet" href="asset/css/style.css">
<div class="form-forget-password">
    <form action="#" onsubmit="return KiemTra()" method="post" id="form-forget">
        <img src="asset/icons/forgot.png" alt="img-forget">
        <h3>Quên mật khẩu</h3>
        <div class="form-group">
            <label for="email">Nhập địa chỉ email</label> <br>
            <input placeholder="Vui lòng nhập địa chỉ email" type="email" id="input-email" name="email">
            <div id="error4" class="error"></div>
        </div>
        <div class="form-group">
            <button id="btn-forget">Lấy lại mật khẩu</button>
        </div>
    </form>
</div>
<svg id="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 768" fill="none">
    <circle cx="864.5" cy="351.5" r="864.5" fill="white" />
</svg>
<script src="asset/resgist.js"></script>