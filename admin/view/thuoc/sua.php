<h1><?= $TITLE ?></h1>
<p>View: <?= $VIEW ?></p>
<p>Controller: <?= ADMIN_CONTROLLER . $controller . '.php' ?></p>
<p>Controller function: <?= $action ?></p>

<h1>
    Đây là trang sửa thuốc
</h1>
<?php
$id = $_GET['id_thuoc'];
$infoThuocbyId = getThuocById($id);
?>
<form class="form-add-drug" method="POST">

    <table class="info-drug table table-borderless">
        <tbody>
            <tr>
                <th scope="row">Id thuốc</th>
                <td class="td-detail-drug"><input value="<?=$infoThuocbyId['id_thuoc']?>" name="id_thuoc" class="detail-drug-by-id"></input></td>
            </tr>
            <tr>
                <th scope="row">Tên thuốc</th>
                <td class="td-detail-drug"><textarea value="" name="ten_thuoc" class="detail-drug-by-id"><?= $infoThuocbyId['ten_thuoc'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Dạng bào chế</th>
                <td class="td-detail-drug"><textarea value="" name="dang_bao_che" class="detail-drug-by-id"><?= $infoThuocbyId['dang_bao_che'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Nhóm thuốc</th>
                <td class="td-detail-drug"><textarea value="" name="nhom_thuoc" class="detail-drug-by-id"><?= $infoThuocbyId['nhom_thuoc'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh</th>
                <td class="td-detail-drug"><textarea type="file" name="hinh_anh" value="" class="detail-drug-by-id"><?= $infoThuocbyId['hinh_anh'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Liều dùng cách dùng</th>
                <td class="td-detail-drug"><textarea value="" name="lieudung_cachdung" class="detail-drug-by-id"><?= $infoThuocbyId['lieudung_cachdung'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Thận trọng</th>
                <td class="td-detail-drug"><textarea value="" name="than_trong" class="detail-drug-by-id"><?= $infoThuocbyId['than_trong'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Chỉ định</th>
                <td class="td-detail-drug"><textarea value="" name="chi_dinh" class="detail-drug-by-id"><?= $infoThuocbyId['chi_dinh'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Chống chỉ định</th>
                <td class="td-detail-drug"><textarea value="" name="chong_chi_dinh" class="detail-drug-by-id"><?= $infoThuocbyId['chong_chi_dinh'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Tài liệu tham khảo</th>
                <td class="td-detail-drug"><textarea value="" name="tai_lieu_tham_khao" class="detail-drug-by-id"><?= $infoThuocbyId['tai_lieu_tham_khao'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Tác dụng phụ</th>
                <td class="td-detail-drug"><textarea value="" name="tac_dung_phu" class="detail-drug-by-id"><?= $infoThuocbyId['tac_dung_phu'] ?></textarea></td>
            </tr>
            <tr>
                <th scope="row">Chú ý</th>
                <td class="td-detail-drug"><textarea value="" name="chu_y" class="detail-drug-by-id"><?= $infoThuocbyId['chu_y'] ?></textarea></td>
            </tr>
        </tbody>
    </table>

    
    <input type="submit" name="btn-update-drug" class="btn-update-drug" value="Cập nhật">

</form>