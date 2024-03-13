<?php 
    if (isset($_SESSION)){
        session_destroy();
        session_regenerate_id(true); //menghindari cross side scripting (xss)
    }

    session_start();
    $_SESSION["session_id"] = bin2hex(random_bytes(20));
    $_SESSION["user_type"] = 2; //admin

    require_once 'bootstrap.php';
    include $_SESSION["dir_root"] . "/src/view/login.php";

?>