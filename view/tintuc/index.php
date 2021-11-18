<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ASSET . "css/tintuc.css"?>"/>
</head>
   
<body>
    <div class="tab-listintuc">
        <div class=""><h3><a href="#">Trang chủ</a>/<a href="#">Tin tức</a></h3></div>
        <main>
            <article>
                <!--tin tức 1-->
                <?php foreach($dstintuc as $row) { ?>
                <div class="tintuc">
                    <div class="img-tintuc"><img src="img/bangtinbenh.jpeg" alt="alt"></div>
                    <div class="box-tintuc">
                        <div class="title-box-tintuc"><h4><a href="#"><?=$row['tieu_de']?></a></h4></div>
                        <div class="thongtin-tintuc">
                            <div class="tac-gia"><i class="fa fa-user"></i> <span><?=$row['tac_gia']?></span></div> 
                            <div class="ngay-dang"><i class="fa fa-calendar"></i> <span><?=$row['ngay']?></span></div>
                            <div class="so-luot-xem"><i class="fa fa-eye"></i> <span><?=$row['so_luot_xem']?></span></div>
                        </div>
                        <div class="mota-tintuc">
                            <p>
                                <?=$row['noi_dung']?>
                            </p>
                        </div>
                        <a href="#">Xem chi tiết</a>
                    </div>
                </div>
                <?php } ?>
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
            </article>
            <aside>
                <div class="search">
                    <div><h4>Từ khóa liên quan</h4></div>
                    <div class="type-search-">
                        <form action="#">
                            <input type="text" name="kyw" placeholder="Nhập từ khóa">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                        
                    </div>
                    
                </div>
                <div class="tintuc-moinhat">
                    <div><h3>Bài viết mới nhất</h3></div>
                    <ul class="list-group">
                        <li ><a href="#">Cras justo odio</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                    </ul>
                </div>
                <div class="top">
                    <div><h3>Bài viết nhiều người xem</h3></div>
                    <ul class="list-group">
                        <li ><a href="#">Cras justo odio</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                        <li ><a href="#">Dapibus ac facilisis in</a></li>
                    </ul>
                </div>
            </aside>
        </main>
       
    </div>
</body>