<?php

declare(strict_types=1);

echo "Sign Up Page";
?>
<div class="form">
    <form class="form-dang-ky" action="#" onsubmit="return KiemTra()" method="post" id="formdangky">
        <h3>Đăng kí thành viên</h1>
            <img class="file-1" src="asset/icons/register-file.png" alt="register-file">
            <div class="form-signup form-group">
                <label for="name">Tên đăng nhập</label> <br>
                <input type="text" id="name" name="name">
                <div id="error1" class="error"></div>
            </div>
            <div class="form-signup form-group">
                <label for="pass">Mật khẩu</label> <br>
                <input type="password" id="pass" name="pass">
                <div id="error2" class="error"></div>

            </div>
            <div class="form-signup form-group">
                <label for="repass">Nhập lại mật khẩu</label> <br>
                <input type="password" id="repass" name="repass">
                <div id="error3" class="error"></div>

            </div>
            <div class="form-signup form-group">
                <label for="date">Ngày sinh</label> <br>
                <input type="date" id="date" name="date">

            </div>
            <div class="form-signup form-group">
                <label for="email">Email</label> <br>
                <input type="email" id="email" name="email">
                <div id="error4" class="error"></div>

            </div>
            <div class="form-signup form-group">
                <label for="sdt">Số điện thoại</label> <br>
                <input type="number" id="sdt" name="sdt">
                <div id="error5" class="error"></div>

            </div>
            <div class="form-signup form-group">
                <label for="file">Hình ảnh</label> <br>
                <input type="file" id="file" name="file">
            </div>
            <div class="form-signup form-group">
                <label for="text">Tình hình bệnh</label> <br>
                <textarea name="text" id="text-area"></textarea>
                <div id="error6" class="error"></div>
            </div>
            <div class="form-signup form-group">
                <button class="submit-dang-ky">Đăng ký</button>
            </div>
    </form>
    <div class="wave">
        <svg class="wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,160L21.8,144C43.6,128,87,96,131,74.7C174.5,53,218,43,262,64C305.5,85,349,139,393,181.3C436.4,224,480,256,524,224C567.3,192,611,96,655,74.7C698.2,53,742,107,785,138.7C829.1,171,873,181,916,197.3C960,213,1004,235,1047,240C1090.9,245,1135,235,1178,202.7C1221.8,171,1265,117,1309,96C1352.7,75,1396,85,1418,90.7L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
        </svg>
    </div>
</div>
<script src="asset/resgist.js"></script>