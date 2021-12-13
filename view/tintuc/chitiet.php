<div class="w-75 mx-auto p-4 mt-4 d-flex flex-row">
    <div class="w-75">
        <?php extract($layChitiettin) ?>
        <article>
            <header>
                <h1><?= $tieu_de ?></h1>
                <div class="flex flex-row py-2">
                    <?php if ($ngay) { ?>
                        <svg data-toggle="tooltip" title="Ngày đăng" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg> <?= $ngay ?> |
                    <?php } ?>
                    <?php if ($tac_gia) { ?>
                        <svg data-toggle="tooltip" title="Tác giả" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg> <?= $tac_gia ?> |
                    <?php } ?>
                    <svg data-toggle="tooltip" title="Số lượt xem" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg> <?= $so_luot_xem ?>
                </div>
            </header>
            <section class="border rounded p-4 text-secondary font-italic" data-toggle="tooltip" title="Mô tả">
                <?= $mo_ta ?>
            </section>
            <section>
                <?= $noi_dung ?>
            </section>
        </article>
    </div>
    <div class="w-25">
        <div class="flex flex-column border p-2 ml-4 mb-2">
            <div class="font-weight-bold text-uppercase">Các tin nổi bậc</div>
            <div class="flex flex-column flex-wrap" >
                <?php foreach ($listtintuc as $tin) {
                    extract($tin); ?>
                <a data-toggle="tooltip" title="<?= $mo_ta ?>" href="<?= ROOT_DOMAIN . "/tintuc/chitiet?id_tin=" . $id_tin ?>"><?= $tieu_de ?></a> <br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>

</script>