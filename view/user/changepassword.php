<div class="container" style="margin: 5% auto; padding: 2%; width: 50%">
    <form class="px-4" action="" method="POST" id="">
       <?php if ($errors != "") { ?>
            <div class="px-4"> 
                    <div class="alert alert-danger" role="alert">
                        <?= $errors ?>
                    </div>
            </div>
        <?php }?>
        <div>
            <label for="ten">Mật khẩu cũ</label> <br>
            <input class="form-control" type="password" id="name" name="oldpass" value="<?php if(isset($password) == true) echo $password ?>">
        </div>
        <div class="form-group">
            <label for="newpass">Mật khẩu mới</label> <br>
            <input class="form-control" type="password" id="pass" name="newpass" value="<?php if(isset($newpass) == true) echo $newpass ?>">
        </div>
        <div class="form-group">
            <label for="repass">Nhập lại mật khẩu mới</label> <br>
            <input class="form-control" type="password" id="repass" name="repass" value="<?php if(isset($repass) == true) echo $repass ?>">
        </div>
        <div class="form-group text-center mx-auto">
            <input type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>