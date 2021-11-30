<div  style="margin: 5% auto; padding: 2%; width: 50%">
    <?php extract($chitiet) ?>
    <form enctype="multipart/form-data"  action="" method="POST" id="">
        <div >
            <div >
                <?php if(isset($hinh_anh)== true){ ?>
                    <div style="width: 40%"><img style="width: 80%; height: 230px; border-radius: 120px" src="<?=UPLOADS . "/img_user/"."$hinh_anh."?>"></div>
                <?php }else{ ?>
                    <div style="width: 40%"><img style="width: 80%; height: 200px; border-radius: 120px" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/16-512.png"></div>
                <?php } ?>
                <label  style="height: 40px">
                    <i ></i>
                    <input type="file"  name="hinh_anh" value="<?=$hinh_anh?>" />
                    Thay đổi ảnh đại diện
                </label>
            </div>
            
        </div>
        <div>
            <label for="ten">Họ tên</label> 
            <input  type="text" id="name" name="ten" value="<?=$ten?>">
        </div>
        <div >
            <label for="ngay_sinh">Ngày sinh</label> 
            <input  type="date"  name="ngay_sinh" value="<?=$ngay_sinh?>">
        </div>
        <div >
            <label for="email">Email</label> 
            <input  type="text"  name="email" value="<?=$email?>">
        </div>
        <div >
            <label for="sdt">Số điện thoại</label>
            <input  type="text"  name="sdt" value="<?=$sdt?>">
        </div>
        
        <div >
            <label for="tinhtrangsuckhoe">Tình trạng sức khỏe</label> <br>
            <?php if (isset($tinh_trang_suc_khoe)){ ?>
                <textarea  name="tinhtrangsuckhoe"  id="text-area" value=""><?=$tinh_trang_suc_khoe?></textarea>
            <?php }else{?>
                <textarea  name="tinhtrangsuckhoe" id="text-area"></textarea>
            <?php } ?>
        </div>
        <div >
            <input type="hidden" name="id_user" value="<?=$id_user?>">
            <input type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>