<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    $site_root = $_SESSION["site_root"];
    $_SESSION["router_class"] = "admin\Login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= $site_root?>/jquery-3.7.1.min/jquery-3.7.1.js"></script>
    <script src="<?= $site_root?>/bootstrap5/bootstrap.bundle.min.js"></script>
    <script>const base_URL = "<?= $site_root?>";</script>
    <link rel="stylesheet" href="<?= $site_root?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $site_root?>/bootstrap5/bootstrap.min.css">
    <title>Toko buah </title>
</head>
<body>
    <h3>Payment</h3>
</body>
</html>
