<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE ?></title>
    <!-- CSS only -->

    <link rel="stylesheet" href="<?= ASSET . "css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?= ASSET . "css/font-awesome.min.css" ?>">
    <link rel="stylesheet" href="<?= ASSET . "css/style.css" ?>">
</head>

<body>

    <?php include(DEFAULT_LAYOUT . "header.php"); ?>
    <button class="scrollToTopBtn" id="scrollToTopBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </button>
    <?php include($VIEW); ?>

    <?php include(DEFAULT_LAYOUT . "footer.php"); ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="<?= ASSET . "js/init.js" ?>"></script>
    <script src="<?= ASSET . "js/jquery-3.2.1.slim.min.js" ?>"></script>
    <script src="<?= ASSET . "js/popper.min.js" ?>"></script>
    <script src="<?= ASSET . "js/bootstrap.min.js" ?>"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>