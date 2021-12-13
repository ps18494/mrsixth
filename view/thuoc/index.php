<style>
    .thuoc:hover img {
        border-radius: 50%!important;
        border: 1px solid #dee2e6!important;
        border-color: #007bff!important;
    }
</style>
<div class="w-75 p-4 border rounded d-flex flex-column mx-auto">
     <div class="d-flex flex-row flex-wrap">
         <!-- Danh sách thuốc  -->
         <?php foreach ($listThuoc as $thuoc) { extract($thuoc)?>
             <div class="w-20 d-flex flex-column justify-content-center items-center thuoc" data-toggle="tooltip" title="<?= $chi_dinh ?>">
                <div class="w-50 align-self-center">
                    <a href="<?= ROOT_DOMAIN . "/thuoc/chitiet?id_thuoc=" . $id_thuoc ?>"><img class="p-2 w-100" src="<?= ASSET . "/icons/drug-1.1s-200px.png" ?>" alt="<?= $ten_thuoc ?>" /></a>
                </div>
                <div class="mw-50 text-center align-self-center">
                    <a href="<?= ROOT_DOMAIN . "/thuoc/chitiet?id_thuoc=" . $id_thuoc ?>">
                        <?= $ten_thuoc ?>
                    </a>
                </div>
             </div>
         <?php } ?>

    </div>
    <!-- Phân trang thuốc -->
    <nav class="mx-auto my-4" aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($page > 1) { ?>
                <li class="page-item"><a class="page-link" href="?page=1" aria-label="Previous"><span aria-hidden="true">
                            <<</span></a></li>
            <?php } ?>
            <?php if ($page > 1) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous"><span aria-hidden="true">
                            <</span></a></li>
            <?php } ?>

            <?php for ($i = $from; $i <= $to; $i++) { ?>
                <?php if ($i == $page) { ?>
                    <li class="page-item"><a class="page-link" style="background: #d8e6ff" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } else { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
            <?php } ?>

            <?php if ($page < $tongTrang) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next"><span aria-hidden="true">></span></a></li>
            <?php } ?>

            <?php if ($page < $tongTrang) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $tongTrang ?>" aria-label="Next"> <span aria-hidden="true">>></span></a></li>
            <?php } ?>

        </ul>
    </nav>

 </div>