<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    $site_root = $_SESSION["site_root"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= $site_root?>/jquery-3.7.1.min/jquery-3.7.1.js"></script>
    <script src="<?= $site_root?>/bootstrap5/bootstrap.bundle.min.js"></script>
    <script>const base_url "<?= $site_root?>"</script>
    <link rel="stylesheet" href="<?= $site_root?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $site_root?>/bootstrap5/bootstrap.min.css">
    <title>Toko buah</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="nav">
                    <a href="<?= $site_root?>/src/view/shopping.php" class="nav-link">
                        <i class="fa fa-cart-shopping me-2"></i>Produk
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="<?= $site_root?>/src/img/fruits.png" alt="buah" class="img-fluid">
            </div>
        </div>
    </div>
</body>
</html>