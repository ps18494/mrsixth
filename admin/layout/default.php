<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE ?></title>
</head>
<body>
    <?php include(ADMIN_LAYOUT . "header.php"); ?>

    <?php include($VIEW); ?>

    <?php include(ADMIN_LAYOUT . "footer.php"); ?>
</body>
</html>