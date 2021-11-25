<div class="container" style="margin: 5% auto; padding: 2%; width: 50%">
    <?php extract($chitiet) ?>
    <form enctype="multipart/form-data" class="px-4" action="" method="POST" id="">
        <div class="form-group">
            <div class="avt">
                <?php if($hinh_anh != ""){ ?>
                    <div style="width: 40%"><img style="width: 80%; height: 230px; border-radius: 120px" src="<?=UPLOADS . "/img_user/"."$hinh_anh."?>"></div>
                <?php }else{ ?>
                    <div style="width: 40%"><img style="width: 80%; height: 200px; border-radius: 120px" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/16-512.png"></div>
                <?php } ?>
                <label class="uploadLabel" style="height: 40px">
                    <i class="fa fa-upload"></i>
                    <input type="file"  name="hinh_anh" class="uploadButton"/>
                    Thay đổi ảnh đại diện
                </label>
            </div>
            
        </div>
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