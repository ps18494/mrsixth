<?php
extract($benh);
$maps = [
    "mo_ta" => "Mô tả",
    "trieu_chung" => "Triệu chứng",
    "nguyen_nhan" => "Nguyên nhân",
    "phong_ngua" => "Lây truyền",
    "doi_tuong" => "Đối tượng",
    "chan_doan" => "Chẩn đoán",
    "dieu_tri" => "Điều trị",
];
?>

<style>
/* Slider styling */
.carousel-item img {
  width: auto;
  height: 100%;
  max-height: 400px;
}
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}
.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'><path d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/></svg>");
}
.carousel-indicators .active {
    background-color: #ff3030;
}
.carousel-indicators li {
    background-color: #000000;
}

/* Table of contente styling */
.toc a {
    padding: 0.4rem;
    color: white;
}
.toc a:hover {
    color: black;
    /* text-decoration: underline; */
    /* border: brown 1px solid; */
    /* background-color: white; */
}

/* Article's sections styling */
article.chitietbenh section {
    margin: 0.4rem 0 2rem 0;
}

</style>

<!-- Table of contents -->
<div class="d-flex m-0 justify-content-around bg-primary p-2 mb-4 toc d-flex" id="toc">
</div>
<!-- End TOC -->

<div class="container">
    <article class="chitietbenh">
        <header>
            <h1 class="my-2 text-uppercase"><?= $ten_benh ?></h1>
        </header>
            <form action="" method="POST">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="hidden" name="id_benh" value="<?= $id_benh ?>">
                <?php if (empty($user_care)) { ?>
                    <input type="submit" name="care" value="Quân tam">
                <?php } else { ?>
                    <input type="submit" name="delcare" value=" Bouân tam">
                <?php } ?>
            </form>
            <div>
                <a href="<?= ROOT_DOMAIN . "/benh/chinhsua?idbenh=$id_benh" ?>">
                    <button>Chỉnh sửa</button>
                </a>
            </div>
        
        <?php if ($mo_ta) { ?> 
            <section id="mota" title="Mô tả">
                <?= $mo_ta ?>
            </section>    
        <?php } ?>
        <?php if ($danhSachAnhBenh) { ?>

        <!-- Bắt đầu Slilder -->
        <div class="border rounded">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($index = 1; $index < count($danhSachAnhBenh); $index++) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?$index?>"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= UPLOADS .
                        "/diseases/" .
                        $danhSachAnhBenh[0]["name"] ?>" alt="First slide">
                    </div>
                    <?php for ($index = 1; $index < count($danhSachAnhBenh); $index++) { ?>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="<?= UPLOADS .
                        "/diseases/" .
                        $danhSachAnhBenh[$index]["name"] ?>" alt="Second slide">
                    </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev bg-black" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-black" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- End slider -->

        <?php if ($trieu_chung) { ?> 
            <section id="trieuchung" title="Triệu chứng">
                <?= $trieu_chung ?>
            </section>    
        <?php } ?>
        
        <?php if ($nguyen_nhan) { ?> 
            <section id="nguyennhan" title="Nguyên nhân">
                <?= $nguyen_nhan ?>
            </section>    
        <?php } ?>

        <?php if ($phong_ngua) { ?> 
            <section id="phongngua" title="Phòng ngừa">
                <?= $phong_ngua ?>
            </section>    
        <?php } ?>

        <?php if ($duong_lay_truyen) { ?> 
            <section id="laytruyen" title="Đường lây truyền">
                <?= $duong_lay_truyen ?>
            </section>    
        <?php } ?>

        <?php if ($doi_tuong) { ?> 
            <section id="doituong" title="Đối tượng">
                <?= $doi_tuong ?>
            </section>    
        <?php } ?>

        <?php if ($chan_doan) { ?> 
            <section id="chandoan" title="Chẩn đoán">
                <?= $chan_doan ?>
            </section>    
        <?php } ?>

        <?php if ($dieu_tri) { ?> 
            <section id="dieutri" title="Điều trị">
                <?= $dieu_tri ?>
            </section>    
        <?php } ?>

        <?php }
// end if
?>
    </article>
</div>

<script>
    // Tạo TOC
    const sections = document.querySelectorAll("article.chitietbenh section");
    const toc = document.querySelector("#toc");
    const createAnchor = (id, title) => {
        anchor = document.createElement("a");
        anchor.href = `#${id}`;
        anchor.text = title
        return anchor
    }
    sections.forEach((section) => {
        anchor = createAnchor(section.id, section.title);
        toc.appendChild(anchor);
    })
</script>