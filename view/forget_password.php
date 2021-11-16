<?php declare(strict_types=1);

    echo "Forget Password Page";
?>
<h1>Quên mật khẩu</h1>
<div class="form">
    <form action="#" onsubmit="return KiemTra()" method="post" id="frmtimmk">
    <div  class="row mb10">
        Nhập địa chỉ Email<br>
        <input type="email" id="email" name="email">
        <div id="error4" class="error"></div>
    </div>
    <input type="submit" value="Lấy lại mật khẩu">
    </form>
</div>
<script src="asset/resgist.js"></script>