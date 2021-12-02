<style>
    .alphabet-toc a:hover{
        border-color: #007bff!important;
    }
</style>
<div class="w-75 mx-auto">
    <div class="my-4 d-flex flex-row justify-content-between alphabet-toc">

    </div>
    <div class="danhsachbenh">
        <?php foreach($danhSachBenhTheoKyTu as $kyTu => $danhSachBenh) { ?>
        <div class="pb-2 border-bottom" id="<?=$kyTu?>">
            <div class="mt-2 h4"><?=$kyTu?></div>
            <div class="d-flex flex-row flex-wrap">
                <?php foreach ($danhSachBenh as $benh) { extract($benh) ; ?>
                <a style="width: 33%" data-toggle="tooltip" title="<?= limit_words($mo_ta, 50)?>" href="<?=ROOT_DOMAIN . "/benh/chitiet?idbenh=$id_benh"?>"><?= $ten_benh ?></a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script>
    const divsHasChar = document.querySelectorAll("div.danhsachbenh > div");
    const alphabetToc = document.querySelector("div.alphabet-toc");

    const anchor = (id) => {
        const anchorElement = document.createElement('a');
        anchorElement.href = `#${id}`;
        anchorElement.innerText = id;
        anchorElement.classList.add('text-uppercase', 'p-2', 'border', 'text-dark');
        return anchorElement;
    }

    divsHasChar.forEach((div) => {
        alphabetToc.appendChild(anchor(div.id));
    })
</script>