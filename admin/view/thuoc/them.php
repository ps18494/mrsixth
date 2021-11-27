<div class="wrapper">
    <h2>Thêm thuốc</h2>
    <form action="<?= ROOT_DOMAIN . "/admin/thuoc/them" ?>" method="POST" class="add-drug">
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Id thuốc</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="ten_thuoc" id="inputName" placeholder="auto number" disabled>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Tên thuốc</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="ten_thuoc" id="inputName" placeholder="Nhập tên thuốc">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Dạng bào chế</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="dang_bao_che" id="inputName" placeholder="Nhập dạng bào chế">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Nhóm thuốc</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="nhom_thuoc" id="inputName" placeholder="Nhập nhóm thuốc">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Hình ảnh</label>
            <div class="col-sm-1-12">
                <input type="file" class="form-control" name="hinh_anh" id="inputName">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Tài liệu tham khảo</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="tai_lieu_tham_khao" id="inputName" placeholder="Nhập tài liệu">
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Liều dùng cách dùng</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="lieudung_cachdung" id="inputName" name="lieudung_cachdung"></input>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Thận trọng</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="than_trong" id="inputName" name="than_trong"></input>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Chỉ định</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="chi_dinh" id="inputName" name="chi_dinh"></input>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Chống chỉ định</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="chong_chi_dinh" id="inputName" name="chong_chi_dinh"></input>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Tác dụng phụ</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="tac_dung_phu" id="inputName" name="tac_dung_phu"></input>
            </div>
        </div>
        <div class="label-add-drug form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label">Chú ý</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="chu_y" id="inputName" name="chu_y"></input>
            </div>
        </div>
        <div class="box-add-drug form-group row">
            <div class="offset-sm-6">
                <input type="submit" name="btn-add-drug" class="btn btn-primary"></input>
                <?php if(isset($msgError) && $msgError != '') echo $msgError ?>
            </div>
        </div>
    </form>

</div>