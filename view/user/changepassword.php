<div  style="margin: 5% auto; padding: 2%; width: 50%">
    <form  action="" method="POST" id="">
       <?php if ($errors != "") { ?>
            <div > 
                    <div  role="alert">
                        <?= $errors ?>
                    </div>
            </div>
        <?php }?>
        <div>
            <label for="ten">Mật khẩu cũ</label> <br>
            <input  type="password" id="name" name="oldpass" value="<?php if(isset($password) == true) echo $password ?>">
        </div>
        <div >
            <label for="newpass">Mật khẩu mới</label> <br>
            <input  type="password" id="pass" name="newpass" value="<?php if(isset($newpass) == true) echo $newpass ?>">
        </div>
        <div >
            <label for="repass">Nhập lại mật khẩu mới</label> <br>
            <input  type="password" id="repass" name="repass" value="<?php if(isset($repass) == true) echo $repass ?>">
        </div>
        <div >
            <input type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>