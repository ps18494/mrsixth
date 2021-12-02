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
        <?php foreach ($items as  $item) {?>
            <tr class="data-drug">
                <td class="ten_thuoc">
                    <div>
                        <?= $item['ten_benh'] ?>
                    </div>
                </td>
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
                    <a href="<?= ROOT_DOMAIN . "/admin/benh/sua?id_benh=" . $item['id_benh'] ?>"><button name="capnhat" class="btn-function">Sửa</button></a>
                    <a onclick="return confirm('Bạn muốn xóa dữ liệu này ?')" href="<?= ROOT_DOMAIN . "/admin/benh/xoa/?id_benh=" . $item['id_benh'] ?>" ?><button name="btn-xoa-thuoc" class="btn-function">Xóa</button></a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>
         <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if($page >1 ){?>
                            <li class="page-item"><a class="page-link" href="?page=1" aria-label="Previous"><span aria-hidden="true"><<</span></a></li>
                        <?php } ?>
                        <?php if ($page >1) {?>
                            <li class="page-item"><a class="page-link" href="?page=<?=$page - 1?>" aria-label="Previous"><span aria-hidden="true"><</span></a></li>
                        <?php }?>
                            
                        <?php for($i = $from; $i <= $to ; $i++) {?>
                            <?php if ($i == $page){?>
                            <li class="page-item"><a class="page-link" style="background: #d8e6ff" href="?page=<?=$i?>"><?=$i?></a></li>
                            <?php }else{?>
                            <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
                            <?php }?>
                        <?php } ?>
                           
                        <?php if($page < $tongTrang){?>    
                            <li class="page-item"><a class="page-link" href="?page=<?=$page + 1?>" aria-label="Next"><span aria-hidden="true">></span></a></li>
                        <?php }?>
                            
                        <?php if($page < $tongTrang){?>   
                            <li class="page-item"><a class="page-link" href="?page=<?=$tongTrang?>" aria-label="Next"> <span aria-hidden="true">>></span></a></li>
                        <?php }?>
                   
                    </ul>
                </nav>