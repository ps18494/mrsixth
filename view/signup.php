<div class="container p-2 my-4 rounded">
    <h1 class="text-center text-capitalize">Đăng kí thành viên</h1>
    <?php if (isset($MESSAGES)) { ?>
        <div class="px-4">
            <?php foreach($MESSAGES as $msg) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form class="px-4" method="POST" id="formdangky">
        <div>
            <label for="name">Tên đăng nhập</label> <br>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="pass">Mật khẩu</label> <br>
            <input class="form-control" type="password" id="pass" name="pass">
        </div>
        <div class="form-group">
            <label for="repass">Nhập lại mật khẩu</label> <br>
            <input class="form-control" type="password" id="repass" name="repass">
        </div>
        <!-- <div class="form-group">
            <label for="date">Ngày sinh</label> <br>
            <input class="form-control" type="date" id="date" name="date">
        </div> -->
        <div class="form-group">
            <label for="email">Email</label> <br>
            <input class="form-control" type="text" id="email" name="email">
        </div>
        <!-- <div class="form-group">
            <label for="sdt">Số điện thoại</label> <br>
            <input class="form-control" type="number" id="sdt" name="sdt">
        </div>
        <div class="form-group">
            <label for="file">Hình ảnh</label> <br>
            <input class="form-control" type="file" id="file" name="file">
        </div>
        <div class="form-group">
            <label for="text">Tình trạng sức khỏe</label> <br>
            <textarea class="form-control" name="tinhtrangsuckhoe" id="text-area"></textarea>
        </div> -->
        <div class="form-group text-center mx-auto">
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
    </form>
    <div class="px-4">
        <div>Đã có tài khoản: <a class="text-primary" href="<?= ROOT_DOMAIN . "/login"?>">Đăng nhập</a></div>
        <div><a class="text-primary" href="<?= ROOT_DOMAIN . "/forget_password"?>">Quên mật khẩu</a></div>

    </div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="<?= ASSET . "js/signup.js"?>"></script>