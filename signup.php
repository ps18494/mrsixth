<?php declare(strict_types=1);

    echo "Sign Up Page";
?>
<link rel="stylesheet" href="asset/css/style.css">
<div class="form">
    <h3>Đăng kí thành viên</h1>
    <form action="#" onsubmit="return KiemTra()" method="post" id="frmdangky">
    <div class="form-group">
        <label for="">Tên đăng nhập</label> <br>
        <input type="text" id="name" name="name">
    <div id="error1" class="error"></div>
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label> <br>
        <input type="password" id="pass" name="pass">
    <div id="error2" class="error"></div>

    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu</label> <br>
        <input type="password" id="repass" name="repass">
    <div id="error3" class="error"></div>

    </div>
    <div class="form-group">
        <label for="">Ngày sinh</label> <br>
        <input type="date" id="date" name="date">

    </div>
    <div class="form-group">
        <label for="">Email</label> <br>
        <input type="email" id="email" name="email">
    <div id="error4" class="error"></div>

    </div>
    <div class="form-group">
        <label for="">Số điện thoại</label> <br>
        <input type="number" id="sdt" name="sdt">
    <div id="error5" class="error"></div>

    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label> <br>
        <input type="file" id="file" name="file">
    </div>
    <div class="form-group">
        <label for="">Tiếu sử bệnh</label> <br>
        <textarea name="text" id="text-area"></textarea>
    <div id="error6" class="error"></div>
    </div>
    <div class="form-group">
        <label for="">Mô tả bệnh</label> <br>
        <textarea name="text" id="text-area"></textarea>
    <div id="error7" class="error"></div>
    </div>
    <div class="form-group">
        <button id="btn-submit">Đăng ký</button>
    </div>
    </form>
</div>
<script src="asset/resgist.js"></script>