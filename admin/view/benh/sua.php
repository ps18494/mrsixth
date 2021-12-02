<div class="wrapper">
     <?php extract($getbenhbyid)?>
    <h2>Sửa bệnh: <?=$ten_benh?></h2>
   
    <form action="<?= ROOT_DOMAIN . "/admin/benh/sua" ?>" method="POST" class="add-drug">
        <div class="label-add-drug form-group row">
            <label for="ip1" class="col-sm-1-12 col-form-label">Tên bệnh</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control"  name="ten_benh" id="ip1" value="<?=$ten_benh?>" >
            </div>
            <?php if(isset($erros['ten_benh'])){ ?>
                <span style="color: red"><?=$erros['ten_benh']?></span>
            <?php }?>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip2" class="col-sm-1-12 col-form-label">Mô tả</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="mo_ta" id="ip2" value="<?=$mo_ta?>"  >
            </div>
            <?php if(isset($erros['mo_ta'])){ ?>
                <span style="color: red"><?=$erros['mo_ta']?></span>
            <?php }?>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip3" class="col-sm-1-12 col-form-label">Triệu chứng</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="trieu_chung" id="ip3" value="<?=$trieu_chung?>" >
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip4" class="col-sm-1-12 col-form-label">Nguyên nhân</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="nguyen_nhan" id="ip4" value="<?=$nguyen_nhan?>">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip5" class="col-sm-1-12 col-form-label">Phòng ngừa</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="phong_ngua" id="ip5" value="<?=$phong_ngua?>">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip6" class="col-sm-1-12 col-form-label">Đường lây truyền</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="duong_lay_truyen" id="ip6" value="<?=$duong_lay_truyen?>">
            </div>
        </div>
<!--        <div class="label-add-drug form-group row">
            <label for="ip7" class="col-sm-1-12 col-form-label">Phòng ngừa</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="than_trong" id="ip7" >
            </div>
        </div>-->
        <div class="label-add-drug form-group row">
            <label for="ip8" class="col-sm-1-12 col-form-label">Đối tượng</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="doi_tuong" id="ip8" value="<?=$doi_tuong?>">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip9" class="col-sm-1-12 col-form-label">Chuẩn đoán</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="chuan_doan" id="ip9" value="<?=$chan_doan?>">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="ip10" class="col-sm-1-12 col-form-label">Điều trị</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="dieu_tri" id="ip10" value="<?=$dieu_tri?>">
            </div>
        </div>
        <div class="box-add-drug form-group row">
            <div class="offset-sm-6">
                <input type="hidden" name="id_benh" value="<?=$id_benh?>">
                <input type="submit" name="capnhat" class="btn btn-primary">
                <?php //if(isset($msgError) && $msgError != '') echo $msgError ?>
            </div>
        </div>
    </form>

</div>