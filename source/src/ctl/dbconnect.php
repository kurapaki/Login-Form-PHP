<?php
if(!isset($_SESSION)){
    session_start();
}
require_once $_SESSION["dir_root"] . "/src/ctl/dbconfig.php";

function db(): PDO{
    static $pdo;
    if(!$pdo){
        $dsn = "mysql:host=" . DB_HOST . "; port=33006; dbname=" . DB_NAME . "; charset=UTF8";
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $pdo;
}