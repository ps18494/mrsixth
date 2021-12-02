<div >
    <h1 >Đăng nhập</h1>
    <?php if (isset($MESSAGES)) { ?>
        <div >
            <?php foreach($MESSAGES as $msg) { ?>
                <div  role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form  method="POST" id="formdangnhap"  autocomplete="off">
        <div>
            <label for="username">Tên đăng nhập</label> <br>
            <input  type="text" id="name" name="username">
        </div>
        <div >
            <label for="password">Mật khẩu</label> <br>
            <input  type="password" id="pass" name="password">
        </div>
        <div >
            <button type="submit" >Đăng nhập</button>
        </div>
    </form>
    <div >
        <div>Chưa có tài khoản: <a  href="<?= ROOT_DOMAIN . "/signup"?>">Đăng ký</a></div>
        <div>Đăng nhập bằng: <a  href="<?= ROOT_DOMAIN . "/signup"?>">Google</a></div>
        <div><a  href="<?= ROOT_DOMAIN . "/forget_password"?>">Quên mật khẩu</a></div>
    </div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>