<?php
extract($de_xuat); ?>
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
        padding-bottom: 1rem;
    }
    textarea:disabled,
    button:disabled {
        cursor: not-allowed;
    }
    label {
        font-weight: 800;
    }
    .changed {
        color: black;
        border-left: 1px solid #007bff;
        padding-left: 1rem;
    }
    input[for] {
        top: 0;
        right: 0;
        width: 24px;
    }
</style>
<div class="w-75 mx-auto p-4 mt-4 d-flex flex-row">
    <article class="w-75">
        <div class="alert alert-primary" role="alert">
            Đang đợi quản trị viên duyệt đề xuất.
        </div>
        <div>
            <button class="btn btn-warning" id="update" type="button" >Cập nhật lại</button>
        </div>
        <h1><?= $benh["ten_benh"] ?></h1>
        <form method="POST" >
            <input type="hidden" name="idbenh" value="<?= $id_benh ?>">
            <div >
                <label  for="mo_ta">Mô tả</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="mo_ta" />
                <textarea id="mo_ta" name="mo_ta" title="Mô tả"><?= $mo_ta ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Triệu chứng</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="trieu_chung" />
                <textarea id="trieu_chung" name="trieu_chung" title="Triệu chứng"><?= $trieu_chung ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Nguyên nhân</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="nguyen_nhan" />
                <textarea id="nguyen_nhan" name="nguyen_nhan" title="Triệu chứng"><?= $nguyen_nhan ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Phòng ngừa</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="phong_ngua" />
                <textarea id="phong_ngua" name="phong_ngua" title="Phòng ngừa"><?= $phong_ngua ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Đường lây truyền</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="duong_lay_truyen" />
                <textarea id="duong_lay_truyen" name="duong_lay_truyen" title="Đường lây truyền"><?= $duong_lay_truyen ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Đối tượng</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="doi_tuong" />
                <textarea id="doi_tuong" name="doi_tuong" title="Đối tượng"><?= $doi_tuong ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Chẩn đoán</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="chan_doan" />
                <textarea id="chan_doan" name="chan_doan" title="Chẩn đoán"><?= $chan_doan ?></textarea>
            </div>
            <div >
                <label  for="mo_ta">Điều trị</label>
                <input  type="image" src="<?= ASSET .
                    "icons/refresh-svgrepo-com.svg" ?>" for="dieu_tri" />
                <textarea id="dieu_tri" name="dieu_tri" title="Điều trị"><?= $dieu_tri ?></textarea>
            </div>
            <button class="btn btn-primary" name="btn-submit" type="submit" >Sửa</button>
        </form>
    </article>
    <!-- Table of contents -->
    <div id="toc" class="pl-4 w-auto toc h-10 sticky-top">
    </div>
    <!-- End TOC -->
</div>
<script>
    const textAreas = document.querySelectorAll("textarea");
    const resetButtons = document.querySelectorAll("input[for]");
    const updateButton = document.querySelector("button#update");
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

    updateButton.addEventListener('click', () => {
        textAreas.forEach((textarea) => {
            textarea.removeAttribute('disabled');
        })
        document.querySelector("button[name='btn-submit']").removeAttribute('disabled');
        updateButton.remove();
    });

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
    textAreas.forEach((textarea) => {
        textarea.setAttribute('disabled', true);
    })
    document.querySelector("button[name='btn-submit']").setAttribute('disabled', true);

</script>


<script>
    // Tạo TOC
    const sections = document.querySelectorAll("article form textarea");
    const toc = document.querySelector("#toc");
    const createAnchor = (id, title) => {
        anchor = document.createElement("a");
        anchor.href = `#${id}`;
        anchor.text = title
        anchor.id = id;
        return anchor
    }
    sections.forEach((section) => {
        anchor = createAnchor(section.name, section.title);
        toc.appendChild(anchor);
    })

    document.addEventListener("scroll", () => {
        let scrollTop = document.documentElement.scrollTop;
        sections.forEach(section => {
            let anchor = document.querySelector(`a#${section.name}`)
            if (scrollTop >= section.offsetTop - 10 && scrollTop < section.offsetTop + section.offsetHeight) {
                anchor.classList.add('active');
            } else {
                anchor.classList.remove('active');

            }
        })
    })
</script>