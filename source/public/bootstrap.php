<?php 
    if (isset($_SERVER["HTTPS"]) and !empty($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] != "off" ){
    $scheme = "https://";
    }else{
        $scheme = "http://";
    }

    $servername = filter_input(INPUT_SERVER, "SERVER_NAME", FILTER_SANITIZE_STRING);
    $site_root = $scheme . $servername . "/tokobuah/source/";
    $_SESSION["site_root"] = $site_root;
    
    $dir_root = dirname(__DIR__,1);
    $_SESSION["dir_root"] = $dir_root;
?>