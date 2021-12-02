<?php 
    require_once "dao/thongbao.php";
?>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= ROOT_DOMAIN . "/" ?>">Mr.Sixth</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= ROOT_DOMAIN . "/" ?>">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/thuoc"?>">Thuốc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/benh"?>">Bệnh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/#contact"?>">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/tintuc"?>">Tin tức</a>
            </li>
        </ul>
        <form class="header-search-form" action="<?= ROOT_DOMAIN . "/benh/timkiem"?>">
            <div class="d-flex justify-between ">
                <input name="q" class="form-control mr-sm-2" type="text" placeholder="Nhập từ khóa">
                <button><i class="fa fa-search"></i></button>
            </div>
        </form>
        <?php if (is_authenticated()) { ?> 
            <div>
                <a href="<?= ROOT_DOMAIN . "/user/"?>">
                    <button class="btn-dang-nhap btn btn-outline-success" type="submit">Tài khoản</button>
                </a>
                <a href="<?= ROOT_DOMAIN . "/logout/" ?>">
                    <button class="btn-dang-ky btn btn-outline-success" type="submit">Đăng xuất</button>
                </a>
                <div class="d-inline">
                    <a class="text-white position-relative" href="<?= ROOT_DOMAIN . "/user/notifications/"?>">
                        <?php if (kiemTraThongBao($_SESSION['user'])) { ?>
                        <span class="bg-danger p-1 rounded-circle position-absolute top-0 end-0"></span>
                        <?php } ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                    </a>
                </div class="d-inline">
            </div>
        <?php } else { ?>
            <div>
                <a href="<?= ROOT_DOMAIN . "/signup/"?>">
                    <button class="btn-dang-nhap btn btn-outline-success" type="submit">Đăng ký</button>
                </a>
                <a href="<?= ROOT_DOMAIN . "/login/"?>">
                    <button class="btn-dang-ky btn btn-outline-success" type="submit">Đăng nhập</button>
                </a>
            </div>
        <?php } ?>
    </div>
</nav>
<!-- end -->