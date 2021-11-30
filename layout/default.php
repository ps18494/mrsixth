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
    <link rel="stylesheet" href="<?= ASSET . "css/tintuc.css"?>"/>
    <link rel="stylesheet" href="<?= ASSET . "css/ttcn.css"?>"/>
</head>
<body>
    
    <?php include(DEFAULT_LAYOUT . "header.php"); ?>
    <button class="scrollToTopBtn" id="scrollToTopBtn">&#9757;</button>
    <?php include($VIEW); ?>

    <?php include(DEFAULT_LAYOUT . "footer.php"); ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="<?= ASSET . "js/init.js"?>"></script>
    <script src="<?= ASSET . "js/jquery-3.2.1.slim.min.js"?>"></script>
    <script src="<?= ASSET . "js/popper.min.js"?>"></script>
    <script src="<?= ASSET . "js/bootstrap.min.js"?>"></script>
</body>
</html>