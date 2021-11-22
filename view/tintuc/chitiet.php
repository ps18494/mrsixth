<div class="tab-chitiettin">
    <div class="url-web"><a href="#">Trang chủ</a>/<a href="#">Tin tức</a>/<a href="#">Chi tiết</a></div>
    <div class="chitiettin">
        <?php extract($layChitiettin) ?>
        <h3><?=$tieu_de?></h3>
        <span class="ngay">Ngày: <?=$ngay?></span> <span class="view">Lượt xem: <?=$so_luot_xem?></span>
        <p><span class="tacgia">Tác giả: <?=$tac_gia?></span></p>
        <div class="noidung-chitiettin">
            <div class="box-chitiettin">
                <div class="img-chitiettin"><img src="" alt="Hình ảnh có thể có hoặc không"></div>
                <div class="chitiettin-detail">
                    <p>
                        <?=$tom_tat ?>
                    </p>
                </div>
            </div>
            <div class="chitiettin-detail">
                   <?=$noi_dung?>
            </div>
        </div>
    </div>
    <hr>
    <div class="list-baiviet">
        <a href="<?=ROOT_DOMAIN ."/tintuc" ?>"><h2>Các bài viết khác</h2></a>
        <ul>
            <?php foreach($listtintuc as $list){ ?>
                <li><a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=".$list['id_tin']?>"><?=$list['tieu_de']?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>