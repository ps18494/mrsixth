<div class="container" style="margin: 5% auto; padding: 2%; width: 50%">
    <?php extract($chitiet) ?>
    <form class="px-4" action="" method="POST" id="">
        <div>
            <label for="ten">Họ tên</label> 
            <input class="form-control" type="text" id="name" name="ten" value="<?=$ten?>">
        </div>
        <div class="form-group">
            <label for="ngay_sinh">Ngày sinh</label> 
            <input class="form-control" type="date"  name="ngay_sinh" value="<?=$ngay_sinh?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label> 
            <input class="form-control" type="text"  name="email" value="<?=$email?>">
        </div>
        <div class="form-group">
            <label for="sdt">Số điện thoại</label>
            <input class="form-control" type="text"  name="sdt" value="<?=$sdt?>">
        </div>
        <div class="form-group">
            <label for="hinh_anh">Hình ảnh</label>
            <input class="form-control" type="file"  name="hinh_anh" value="<?=$hinh_anh?>">
        </div>
        <div class="form-group">
            <label for="tinhtrangsuckhoe">Tình trạng sức khỏe</label> <br>
            <?php if (isset($tinh_trang_suc_khoe)){ ?>
                <textarea class="form-control" name="tinhtrangsuckhoe"  id="text-area" value=""><?=$tinh_trang_suc_khoe?></textarea>
            <?php }else{?>
                <textarea class="form-control" name="tinhtrangsuckhoe" id="text-area"></textarea>
            <?php } ?>
        </div>
        <div class="form-group text-center mx-auto">
            <input type="hidden" name="id_user" value="<?=$id_user?>">
            <input type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>