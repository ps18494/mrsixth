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
        <h3>Quên mật khẩu</h3>
        <div class="enter-email">
            <div class="form-input-forget form-group">
                <label for="email">Nhập địa chỉ email</label> <br>
                <input placeholder="Vui lòng nhập địa chỉ email" type="email" class="input-email" name="email" required>
            </div>
            <div class="form-input-forget form-group">
                <button type="submit" class="btn-forget">Lấy lại mật khẩu</button>
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