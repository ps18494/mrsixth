<?php declare(strict_types=1);

    echo "Sign Up Page";
?>
<h1>Đăng kí thành viên</h1>
<div class="form">
    <form action="#" onsubmit="return KiemTra()" method="post" id="frmdangky">
    <div  class="row mb10">
        Tên đăng nhập<br>
    <input type="text" id="name" name="name">
    <div id="error1" class="error"></div>
    </div>
    <div  class="row mb10">
        Mật khẩu<br>
        <input type="password" id="pass" name="pass">
    <div id="error2" class="error"></div>
    </div>
    <div  class="row mb10" >
        Nhập lại mật khẩu<br>
        <input type="password" id="repass" name="repass">
    <div id="error3" class="error"></div>
    </div>
    <div  class="row mb10">
        Ngày sinh<br>
        <input type="date" id="date" name="date" >
    </div>
    <div  class="row mb10">
        Email<br>
        <input type="email" id="email" name="email">
        <div id="error4" class="error"></div>
    </div>
    <div  class="row mb10">
        Số điện thoại<br>
        <input type="text" id="sdt" name="sdt">
        <div id="error5" class="error"></div>
    </div>
    <div  class="row mb10">
        Hình ảnh(không bắt buộc)<br>
        <input type="file" id="img" name="img">
    </div>
    <div  class="row mb10">
        Tiều sử bệnh<br>
        <div class="inp">
            <input type="radio" name="tiensu"><span>Có</span>
            <input type="radio" name="tiensu" checked=""><span>Không</span>
        </div>
        <div id="error6" class="error"></div>
    </div>
    <div  class="row mb10">
        Mô tả bệnh<br>
        <textarea name="text " id="note" cols="46" rows="5" maxlength="200"></textarea>
    <div id="error7" class="error"></div>
    </div>
    <input type="submit" value="Đăng ký">
    </form>
</div>
<script src="asset/resgist.js"></script>