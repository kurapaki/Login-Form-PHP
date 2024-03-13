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
    <title>Toko buah Admin</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <form method="post" id="loginform" enctype="application/x-www-form-urlencoded" style="width: 100%; max-width: 300px; text-align:center;">
            <div class="row">
                <h4>LOGIN</h4>
                <div class="input-group">
                    <span class="me-3">USERNAME</span>
                    <input type="text" class="form-control" id="username" name="username" value="" autocomplete="off" required minlength="6">    
                </div>
                <div class="input-group mt-3">
                    <span class="me-3">PASSWORD</span>
                    <input type="password" class="form-control" id="password" name="password" value="" autocomplete="off" required minlength="6">    
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-warning me-3" type="submit"  id="newuser" style="width: 100px;">New</button>
                    <button class="btn btn-success" type="submit"  id="login" style="width: 100px;">Login</button>
                </div>
                <div class="">
                    <small id="loginerror" class="text-danger"></small>
                </div>
            </div>
        </form>
    </div>
    <script src="<?= $site_root?>/src/ctl/setLogin.js"></script>
</body>
</html>