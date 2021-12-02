<?php
extract($benh);
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


    /* Article's sections styling */
    article.chitietbenh section {
        margin: 0.4rem 0 2rem 0;
    }

    .toc {
        display: flex;
        flex-flow: column;
        height: 10%;
        margin-left: 2rem;
        border-left: 1px solid #dee2e6;
    }

    .toc a.active {
        color: #28a745 !important;
    }

    .toc::before {
        content: "Nội dung";
    }
</style>

<div class="w-75 mx-auto p-4 mt-4 d-flex flex-row">
    <article class="chitietbenh w-75">
        <header>
            <h1><?= $ten_benh ?></h1>
        </header>
        <div class="d-flex flex-row-reverse">
            <form action="" method="POST">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="hidden" name="id_benh" value="<?= $id_benh ?>">
                <?php if (empty($user_care)) { ?>
                    <input type="hidden" name="care" value="care">
                    <button type="submit" class="btn btn-outline-primary" data-toggle="tooltip" title="Quan tâm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                        </svg>
                    </button>
                <?php } else { ?>
                    <input type="hidden" name="delcare" value="delcare">
                    <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Bỏ quan tâm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                    </button>
                <?php } ?>
            </form>
            <div>
                <a href="<?= ROOT_DOMAIN . "/benh/chinhsua?idbenh=$id_benh" ?>" data-toggle="tooltip" title="Đề xuất chỉnh sửa">
                    <button type="button" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>

        <?php if ($mo_ta) { ?>
            <section id="mota" title="Mô tả">
                <div class="font-weight-bold text-uppercase">Mô tả</div>
                <div>
                    <?= $mo_ta ?>
                </div>
            </section>
        <?php } ?>
        <?php if ($danhSachAnhBenh) { ?>

            <!-- Bắt đầu Slilder -->
            <div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <?php for ($index = 1; $index < count($danhSachAnhBenh); $index++) { ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<? $index ?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 border rounded border-primary" src="<?= UPLOADS .
                                                                                        "/diseases/" .
                                                                                        $danhSachAnhBenh[0]["name"] ?>" alt="First slide">
                        </div>
                        <?php for ($index = 1; $index < count($danhSachAnhBenh); $index++) { ?>
                            <div class="carousel-item">
                                <img class="w-100 border rounded border-primary" src="<?= UPLOADS .
                                                                                            "/diseases/" .
                                                                                            $danhSachAnhBenh[$index]["name"] ?>" alt="Second slide">
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <!-- <span >Previous</span> -->
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <!-- <span >Next</span> -->
                    </a>
                </div>
            </div>
            <!-- End slider -->

            <?php if ($trieu_chung) { ?>
                <section id="trieuchung" title="Triệu chứng">
                    <div class="font-weight-bold text-uppercase">Triệu chứng</div>
                    <div>
                        <?= $trieu_chung ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($nguyen_nhan) { ?>
                <section id="nguyennhan" title="Nguyên nhân">
                    <div class="font-weight-bold text-uppercase">Nguyên nhân</div>
                    <div>
                        <?= $nguyen_nhan ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($phong_ngua) { ?>
                <section id="phongngua" title="Phòng ngừa">
                    <div class="font-weight-bold text-uppercase">Phòng ngừa</div>
                    <div>
                        <?= $phong_ngua ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($duong_lay_truyen) { ?>
                <section id="laytruyen" title="Đường lây truyền">
                    <div class="font-weight-bold text-uppercase">Đường lây truyền</div>
                    <div>
                        <?= $duong_lay_truyen ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($doi_tuong) { ?>
                <section id="doituong" title="Đối tượng">
                    <div class="font-weight-bold text-uppercase">Đối tượng</div>
                    <div>
                        <?= $doi_tuong ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($chan_doan) { ?>
                <section id="chandoan" title="Chẩn đoán">
                    <div class="font-weight-bold text-uppercase">Chẩn đoán</div>
                    <div>
                        <?= $chan_doan ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($dieu_tri) { ?>
                <section id="dieutri" title="Điều trị">
                    <div class="font-weight-bold text-uppercase">Điều trị</div>
                    <div>
                        <?= $dieu_tri ?>
                    </div>
                </section>
            <?php } ?>

        <?php } // end if 
        ?>
    </article>
    <!-- Table of contents -->
    <div id="toc" class="pl-4 w-auto toc h-10 sticky-top">
    </div>
    <!-- End TOC -->
</div>

<script>
    // Tạo TOC
    const sections = document.querySelectorAll("article.chitietbenh section");
    const toc = document.querySelector("#toc");
    const createAnchor = (id, title) => {
        anchor = document.createElement("a");
        anchor.href = `#${id}`;
        anchor.text = title
        anchor.id = id;
        return anchor
    }
    sections.forEach((section) => {
        anchor = createAnchor(section.id, section.title);
        toc.appendChild(anchor);
    })

    document.addEventListener("scroll", () => {
        let scrollTop = document.documentElement.scrollTop;
        sections.forEach(section => {
            let anchor = document.querySelector(`a#${section.id}`)
            if (scrollTop >= section.offsetTop - 10 && scrollTop < section.offsetTop + section.offsetHeight) {
                anchor.classList.add('active');
            } else {
                anchor.classList.remove('active');

            }
        })
    })
</script>