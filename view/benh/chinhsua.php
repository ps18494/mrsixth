<?php
extract($benh); ?>
<style>
    textarea {
        resize: none;
        border: none;
        outline: none;

        background: none;
        background: transparent;
        color: rgba(113,113,113, 0.9);
        /* padding: 2rem; */
        width: 100%;
        opacity: 50;
        border-bottom: 1px solid black;
        padding-bottom: 1rem;
    }
    .changed {
        color: black;
    }
    input[for] {
        top: 0;
        right: 0;
        width: 24px;
    }
</style>
<div >
    <h1>Chỉnh sửa <?= $ten_benh ?></h1>
    <form method="POST" >
        <input type="hidden" name="idbenh" value="<?= $id_benh ?>">
        <div >
            <label  for="mo_ta">Mô tả</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="mo_ta" />
            <textarea name="mo_ta"><?= $mo_ta ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Triệu chứng</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="trieu_chung" />
            <textarea name="trieu_chung"><?= $trieu_chung ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Nguyên nhân</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="nguyen_nhan" />
            <textarea name="nguyen_nhan"><?= $nguyen_nhan ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Phòng ngừa</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="phong_ngua" />
            <textarea name="phong_ngua"><?= $phong_ngua ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Đường lây truyền</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="duong_lay_truyen" />
            <textarea name="duong_lay_truyen"><?= $duong_lay_truyen ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Đối tượng</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="doi_tuong" />
            <textarea name="doi_tuong"><?= $doi_tuong ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Chẩn đoán</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="chan_doan" />
            <textarea name="chan_doan"><?= $chan_doan ?></textarea>
        </div>
        <div >
            <label  for="mo_ta">Điều trị</label>
            <input  type="image" src="<?= ASSET .
                "icons/refresh-svgrepo-com.svg" ?>" for="dieu_tri" />
            <textarea name="dieu_tri"><?= $dieu_tri ?></textarea>
        </div>
        <button name="btn-submit" type="submit" >Sửa</button>
    </form>
    <script>
        const textAreas = document.querySelectorAll("textarea");
        const resetButtons = document.querySelectorAll("input[for]");
        const defaultHeights = Array.from(textAreas).reduce((prev, curr) => {
            prev[curr.name] = curr.scrollHeight;
            return prev;
        }, {});

        const getDefaultHeight = (name) => {
            return defaultHeights[name];
        }

        const setTextAreaHeight = (event) => {
            event.target.style.height = "auto";
            event.target.classList.add('changed');
            event.target.style.height = (event.target.scrollHeight) + "px";
        }
        resetButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                const textarea = document.querySelector(`textarea[name='${event.target.getAttribute('for')}']`);
                textarea.classList.remove('changed');
                textarea.setAttribute("style", "height:" + getDefaultHeight(textarea.name) + "px;overflow-y:hidden;");
                textarea.value= textarea.defaultValue;
                event.preventDefault();
            })
        })
        textAreas.forEach((textarea) => {
            textarea.setAttribute("style", "height:" + (getDefaultHeight(textarea.name)) + "px;overflow-y:hidden;");
            textarea.addEventListener("input", setTextAreaHeight, false);
        })

    </script>
</div>