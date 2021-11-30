

    <div >
        <div class=""><h3><a href="#">Trang chủ</a>/<a href="#">Tin tức</a></h3></div>
        <main>
            <article>
                <!--tin tức 1-->
                <?php foreach($dstintuc as $row) { ?>
                <div >
                    <div ><img  src="img/bangtinbenh.jpeg" alt="Ảnh có thể có hoặc không"></div>
                    <div >
                        <div ><h4><a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=" . $row['id_tin']?>"><?=$row['tieu_de']?></a></h4></div>
                        <div >
                            <div ><i ></i> <span><?=$row['tac_gia']?></span></div> 
                            <div ><i ></i> <span><?=$row['ngay']?></span></div>
                            <div ><i ></i> <span><?=$row['so_luot_xem']?></span></div>
                        </div>
                        <div >
                            <p>
                                <a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=" . $row['id_tin']?>"><?=$row['tom_tat']?></a>
                            </p>
                        </div>
                        <a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=" . $row['id_tin']?>">Xem chi tiết</a>
                    </div>
                </div>
                <?php } ?>
                <nav aria-label="Page navigation example">
                    <ul >
                        <?php if($page >1 ){?>
                            <li ><a  href="?page=1" aria-label="Previous"><span aria-hidden="true"><<</span></a></li>
                        <?php } ?>
                        <?php if ($page >1) {?>
                            <li ><a  href="?page=<?=$page - 1?>" aria-label="Previous"><span aria-hidden="true"><</span></a></li>
                        <?php }?>
                            
                        <?php for($i = $from; $i <= $to ; $i++) {?>
                            <?php if ($i == $page){?>
                            <li ><a  style="background: #d8e6ff" href="?page=<?=$i?>"><?=$i?></a></li>
                            <?php }else{?>
                            <li ><a  href="?page=<?=$i?>"><?=$i?></a></li>
                            <?php }?>
                        <?php } ?>
                           
                        <?php if($page < $tongTrang){?>    
                            <li ><a  href="?page=<?=$page + 1?>" aria-label="Next"><span aria-hidden="true">></span></a></li>
                        <?php }?>
                            
                        <?php if($page < $tongTrang){?>   
                            <li ><a  href="?page=<?=$tongTrang?>" aria-label="Next"> <span aria-hidden="true">>></span></a></li>
                        <?php }?>
                   
                    </ul>
                </nav>
            </article>
            <aside>
                <div >
                    <div><h4>Từ khóa liên quan</h4></div>
                    <div >
                        <form action="#">
                            <input type="text" name="kyw" placeholder="Nhập từ khóa">
                            <button><i ></i></button>
                        </form>
                        
                    </div>
                    
                </div>
                <div >
                   
                    <div><h3>Bài viết mới nhất</h3></div>
                    <ul >
                        <?php foreach ($tinMoiNhat as $tinmoi){ ?>
                            <li><a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=".$tinmoi['id_tin']?>"><?=$tinmoi['tieu_de']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div >
                    <div><h3>Bài viết nhiều người xem</h3></div>
                    <ul >
                        <?php foreach ($tinXemNhieu as $tinNhieu){ ?>
                            <li><a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=".$tinNhieu['id_tin']?>"><?=$tinNhieu['tieu_de']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </aside>
        </main>
       
    </div>
