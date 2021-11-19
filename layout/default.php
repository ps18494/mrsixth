<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE ?></title>
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ASSET . "css/home.css"?>">
    <link rel="stylesheet" href="<?= ASSET . "css/style.css" ?>">
    <link rel="stylesheet" href="<?= ASSET . "css/tintuc.css"?>"/>


</head>
<body>
    <?php include(DEFAULT_LAYOUT . "header.php"); ?>

    <?php include($VIEW); ?>

    <?php include(DEFAULT_LAYOUT . "footer.php"); ?>
    <!-- JavaScript Bundle with Popper -->
</body>
</html>