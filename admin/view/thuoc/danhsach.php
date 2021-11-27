<h1>
    Đây là danh sách thuốc
</h1>
<?php $ds = get8Thuoc(); ?>

<table class="ds-thuoc table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Tên thuốc</th>
            <th scope="col">Dạng bào chế</th>
            <th scope="col">Nhóm thuốc</th>
            <th scope="col">Thận trọng</th>
            <th scope="col">Chỉ định</th>
            <th scope="col">Chống chỉ định</th>
            <th scope="col">Tác dụng phụ</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ds as $item) { ?>
            <tr class="data-drug">
                <td class="ten_thuoc">
                    <div>
                        <?= $item['ten_thuoc'] ?>
                    </div>
                </td>
                <td class="dang_bao_che">
                    <div class="d-inline-block text">
                        <?= $item['dang_bao_che'] ?>
                    </div>
                </td>
                <td class="nhom_thuoc">
                    <div class="d-inline-block text">
                        <?= $item['nhom_thuoc'] ?>
                    </div>
                </td>
                <td class="than_trong">
                    <div class="d-inline-block text">
                        <?= $item['than_trong'] ?>
                    </div>
                </td>
                <td class="chi_dinh">
                    <div class="d-inline-block text">
                        <?= $item['chi_dinh'] ?>
                    </div>
                </td>
                <td class="chong_chi_dinh">
                    <div class="d-inline-block text">
                        <?= $item['chong_chi_dinh'] ?>
                    </div>
                </td>
                <td class="tac_dung_phu">
                    <div class="d-inline-block text">
                        <?= $item['tac_dung_phu'] ?>
                    </div>
                </td>
                <td class="d-flex function">
                    <a href="<?= ROOT_DOMAIN . "/admin/thuoc/sua?id_thuoc=" . $item['id_thuoc'] ?>"><button name="btn-sua-thuoc" class="btn-function">Sửa</button></a>
                    <a onclick="return confirm('Bạn muốn xóa dữ liệu này ?')" href="<?= ROOT_DOMAIN . "/admin/thuoc/xoa/?id_thuoc=" . $item['id_thuoc'] ?>" ?><button name="btn-xoa-thuoc" class="btn-function">Xóa</button></a>
                </td>
            </tr>
        <?php } ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </tbody>
</table>