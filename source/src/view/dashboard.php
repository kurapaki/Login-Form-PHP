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
    <link rel="stylesheet" href="<?= $site_root?>/src/css/layout.css">
    <title>Toko buah </title>
</head>
<body>
    <h3 class="ms-4">DASHBOARD</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" id="dashboard-menu">
                <ul>
                    <li><a class="dashboardmenu" id="menu-product" href="#">Product</a></li>
                    <hr>
                    <li><a class="dashboardmenu"  id="menu-supplier" href="#">Supplier</a></li>
                    <hr>
                    <li><a class="dashboardmenu"  id="menu-purchase" href="#">Purchase</a></li>
                    <hr>
                    <li><a class="dashboardmenu"  id="menu-sales" href="#">Sales</a></li>
                    <hr>
                    <li><a class="dashboardmenu"  id="menu-inventory" href="#">Inventory</a></li> 
                </ul>
                
            </div>
            <div class="col-7" id="dashboard-table">
                
            </div>
            <div class="col-3" id="dashboard-update">
                
            </div>
        </div>
    </div>
    <script src="<?= $site_root?>/src/ctl/setDashboard.js"></script>
</body>
</html>


