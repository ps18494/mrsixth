<div class="container p-2 my-4 rounded">
    <h1 class="text-center text-capitalize">Đăng nhập</h1>
    <?php if (isset($MESSAGES)) { ?>
        <div class="px-4">
            <?php foreach($MESSAGES as $msg) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form class="px-4" method="POST" id="formdangnhap"  autocomplete="off">
        <div>
            <label for="username">Tên đăng nhập</label> <br>
            <input class="form-control" type="text" id="name" name="username">
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label> <br>
            <input class="form-control" type="password" id="pass" name="password">
        </div>
        <div class="form-group text-center mx-auto">
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </div>
    </form>
    <div class="px-4">
        <div>Chưa có tài khoản: <a class="text-primary" href="<?= ROOT_DOMAIN . "/signup"?>">Đăng ký</a></div>
        <div>Đăng nhập bằng: <a class="text-primary" href="<?= ROOT_DOMAIN . "/signup"?>">Google</a></div>
        <div><a class="text-primary" href="<?= ROOT_DOMAIN . "/forget_password"?>">Quên mật khẩu</a></div>
    </div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>