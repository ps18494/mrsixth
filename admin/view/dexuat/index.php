<h1>
    Đây là danh sách Bệnh
</h1>

<table class="ds-thuoc table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Tên bệnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Triệu chứng</th>
            <th scope="col">Nguyên nhân</th>
            <th scope="col">Phòng ngừa</th>
            <th scope="col">Đường lây truyền</th>
            <th scope="col">Đối tượng</th>
            <th scope="col">Chuẩn đoán</th>
            <th scope="col">Điều trị</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($getDeXuat as  $item) {?>
            <tr class="data-drug">
                <td class="dang_bao_che">
                    <div class="d-inline-block text">
                        <?= $item['mo_ta'] ?>
                    </div>
                </td>
                <td class="nhom_thuoc">
                    <div class="d-inline-block text">
                        <?= $item['trieu_chung'] ?>
                    </div>
                </td>
                <td class="than_trong">
                    <div class="d-inline-block text">
                        <?= $item['nguyen_nhan'] ?>
                    </div>
                </td>
                <td class="chi_dinh">
                    <div class="d-inline-block text">
                        <?= $item['phong_ngua'] ?>
                    </div>
                </td>
                <td class="chong_chi_dinh">
                    <div class="d-inline-block text">
                        <?= $item['duong_lay_truyen'] ?>
                    </div>
                </td>
                <td class="tac_dung_phu">
                    <div class="d-inline-block text">
                        <?= $item['doi_tuong'] ?>
                    </div>
                </td>
                <td class="tac_dung_phu">
                    <div class="d-inline-block text">
                        <?= $item['chan_doan'] ?>
                    </div>
                </td>
                <td class="tac_dung_phu">
                    <div class="d-inline-block text">
                        <?= $item['dieu_tri'] ?>
                    </div>
                </td>
                <td class="d-flex function">
                    <a href="<?= ROOT_DOMAIN . "/admin/dexuat/chitiet?id_de_xuat=" . $item['id_de_xuat'] ?>"><button name="" class="btn-function">Chi tiết</button></a>
                    </td>
            </tr>
        <?php }?>
    </tbody>
</table>