<div class="form-forget-password">
    <?php if (isset($MESSAGES)) { ?>
        <div class="px-4">
            <?php foreach($MESSAGES as $msg) { ?>
                <div class="alert alert-warning" role="alert">
                    <?= $msg ?>
                </div>
            <?php } // End loop $MESSAGE ?>
        </div>
    <?php } // End if?> 
    <form method="post" class="form-forget">
        <div class="img-forget-password">
            <img src="<?= ASSET . "icons/forgot.png"?>" alt="img-forget">
        </div>
        <h3>Đặt lại mật khẩu</h3>
        <div class="enter-email">
            <input type="hidden" name="email" value="<?=$email?>">
            <input type="hidden" name="key" value="<?=$key?>">
            <div class="form-input-forget form-group">
                <label for="email">Mật khẩu mới</label> <br>
                <input placeholder="Vui lòng Mật khẩu mới" type="password" class="input-email" name="password" required>
            </div>
            <div class="form-input-forget form-group">
                <label for="email">Xác nhận mật khẩu mới</label> <br>
                <input placeholder="Xác nhận mật khẩu mới" type="password" class="input-email" name="confirmpassword" required>
            </div>
            <div class="form-input-forget form-group">
                <button type="submit" class="btn-forget">Đổi mật khẩu</button>
            </div>
        </div>
    </form>
</div>
<svg class="circle" viewBox="0 0 512 768" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="864.5" cy="351.5" r="864.5" fill="#91B6F9" />
</svg>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>