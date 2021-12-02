<div >
    <h1 >Đăng kí thành viên</h1>
    <?php if (isset($MESSAGES)) { ?>
        <div >
            <?php foreach($MESSAGES as $msg) { ?>
                <div  role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form  method="POST" id="formdangky">
        <div>
            <label for="name">Tên đăng nhập</label> <br>
            <input  type="text" id="name" name="name">
        </div>
        <div >
            <label for="pass">Mật khẩu</label> <br>
            <input  type="password" id="pass" name="pass">
        </div>
        <div >
            <label for="repass">Nhập lại mật khẩu</label> <br>
            <input  type="password" id="repass" name="repass">
        </div>
        <!-- <div >
            <label for="date">Ngày sinh</label> <br>
            <input  type="date" id="date" name="date">
        </div> -->
        <div >
            <label for="email">Email</label> <br>
            <input  type="text" id="email" name="email">
        </div>
        <!-- <div >
            <label for="sdt">Số điện thoại</label> <br>
            <input  type="number" id="sdt" name="sdt">
        </div>
        <div >
            <label for="file">Hình ảnh</label> <br>
            <input  type="file" id="file" name="file">
        </div>
        <div >
            <label for="text">Tình trạng sức khỏe</label> <br>
            <textarea  name="tinhtrangsuckhoe" id="text-area"></textarea>
        </div> -->
        <div >
            <button type="submit" >Đăng ký</button>
        </div>
    </form>
    <div >
        <div>Đã có tài khoản: <a  href="<?= ROOT_DOMAIN . "/login"?>">Đăng nhập</a></div>
        <div><a  href="<?= ROOT_DOMAIN . "/forget_password"?>">Quên mật khẩu</a></div>

    </div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="<?= ASSET . "js/signup.js"?>"></script>