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
        <h3>Quên mật khẩu</h3>
        <div >
            <div >
                <label for="email">Nhập địa chỉ email</label> <br>
                <input placeholder="Vui lòng nhập địa chỉ email" type="email"  name="email" required>
            </div>
            <div >
                <button type="submit" >Lấy lại mật khẩu</button>
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