<?php

if(!isset($_SESSION)){
    session_start();
}
class ClassLoader {
    //autoloader method
    public static function autoLoad($classname){
        $classpath = str_replace("\\","/",$classname);
        $filename = $_SESSION["dir_root"] . "/src/model/" . $classpath . ".php";
        require_once $filename;
    }
    //register autoload
    public static function registerAutoLoader(){
        spl_autoload_register(["ClassLoader", "autoLoad"]);
    }

}

ClassLoader::registerAutoLoader();
