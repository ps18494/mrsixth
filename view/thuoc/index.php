 <div class=""><h3><a href="#">Trang chủ</a>/<a href="#">Tin tức</a></h3></div>
<div class="tab-listhuoc">
    <div class="title-listthuoc"><h2>Danh sách thuốc</h2></div>
      
        <div class="box-drug-client">

            <?php foreach ($listThuoc as $item){ ?>
                <div class="whats-box">
                    <div class="img-listhuoc"><img src="https://th.bing.com/th/id/R.f368feb3878b762911f1ad1972e167fd?rik=b9hVPlNRSWij1Q&riu=http%3a%2f%2fwww.pnmedical.com%2fwp-content%2fuploads%2f2019%2f01%2fpnmed-home-icon-5.png&ehk=vUzY0HGDkhYSGBadXd03nEgpMB2hinrcjU67vg8HEmk%3d&risl=&pid=ImgRaw&r=0" alt="alt"/></div>
                    <a href="<?=ROOT_DOMAIN . "/thuoc/chitiet?id_thuoc=" . $item['id_thuoc']?>"><div class="name-drug"><?=$item['ten_thuoc']?></div></a>
                    <hr>
                </div>
            
            <?php } ?>
        </div>
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
    
</div>
