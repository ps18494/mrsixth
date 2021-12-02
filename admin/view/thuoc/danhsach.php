<table class="ds-thuoc table">
    <form action="<?= ROOT_DOMAIN . "/admin/thuoc/timkiem" ?>" method="get">
        <div class="search-drug form-group">
            <label for="search">Tìm kiếm tên thuốc</label>
            <input type="text" name="kw_drug" placeholder="Nhập từ khóa" class="input-search form-control">
            <input class="sub-sr-drug" type="submit" value="Tìm kiếm">
        </div>
    </form>
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
        <?php $ds = pagination(); ?>
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
                    <a onclick="return confirm('Bạn muốn xóa dữ liệu này ?')" href="<?= ROOT_DOMAIN . "/admin/thuoc/xoa?id_thuoc=" . $item['id_thuoc'] ?>" ?><button name="btn-xoa-thuoc" class="btn-function">Xóa</button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php for ($i = 1; $i < $total_pages; $i++) { ?>
            <li class="page-item"><a class="page-link" href="?num_pages=<?= $i ?>"><?= $i ?></a></li>
        <?php } ?>
    </ul>
</nav>