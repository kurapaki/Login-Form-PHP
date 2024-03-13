<?php
//
if(!isset($_SESSION)){
    session_start();
}

$dir_root = $_SESSION["dir_root"];
require_once $dir_root . "/src/ctl/ClassLoader.php";
$result = ["response"=> 0,"data"=>"Problem on data connection"];

if(strtoupper($_SERVER["REQUEST_METHOD"])=== "POST"){
    //$router_class = isset($_POST["router_class"]) ? htmlspecialchars(filter_input(INPUT_POST, "router_class")):null;
    $router_class = $_SESSION["router_class"];
    $router_function = isset($_POST["router_function"]) ? htmlspecialchars(filter_input(INPUT_POST, "router_function")):null;

    if(!empty($router_class) and !empty($router_function)){
        $objectClass = new $router_class();
        $result =  $objectClass->$router_function();
    }else{
        $result = json_encode(($result));
    }
}else{
    $result =  json_encode($result);
}

echo $result;
exit();