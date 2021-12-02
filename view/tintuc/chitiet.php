<div >
    <div ><a href="#">Trang chủ</a>/<a href="#">Tin tức</a>/<a href="#">Chi tiết</a></div>
    <div >
        <?php extract($layChitiettin) ?>
        <h3><?=$tieu_de?></h3>
        <span >Ngày: <?=$ngay?></span> <span >Lượt xem: <?=$so_luot_xem?></span>
        <p><span >Tác giả: <?=$tac_gia?></span></p>
        <div >
            <div >
                <div ><img src="" alt="Hình ảnh có thể có hoặc không"></div>
                <div >
                    <p>
                        <?=$tom_tat ?>
                    </p>
                </div>
            </div>
            <div >
                   <?=$noi_dung?>
            </div>
        </div>
    </div>
    <hr>
    <div >
        <a href="<?=ROOT_DOMAIN ."/tintuc" ?>"><h2>Các bài viết khác</h2></a>
        <ul>
            <?php foreach($listtintuc as $list){ ?>
                <li><a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=".$list['id_tin']?>"><?=$list['tieu_de']?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>