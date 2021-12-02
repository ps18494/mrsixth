<div >
    <?php if (isset($MESSAGES)) { ?>
        <div >
            <?php foreach($MESSAGES as $msg) { ?>
                <div  role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form method="post" >
        <div >
            <img src="<?= ASSET . "icons/forgot.png"?>" alt="img-forget">
        </div>
        <h3>Đặt lại mật khẩu</h3>
        <div >
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="key" value="<?=$key?>">
            <div >
                <label for="email">Mật khẩu mới</label> <br>
                <input placeholder="Vui lòng Mật khẩu mới" type="password"  name="password" required>
            </div>
            <div >
                <label for="email">Xác nhận mật khẩu mới</label> <br>
                <input placeholder="Xác nhận mật khẩu mới" type="password"  name="confirmpassword" required>
            </div>
            <div >
                <button type="submit" >Đổi mật khẩu</button>
            </div>
        </div>
    </form>
</div>
<svg  viewBox="0 0 512 768" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="864.5" cy="351.5" r="864.5" fill="#91B6F9" />
</svg>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>