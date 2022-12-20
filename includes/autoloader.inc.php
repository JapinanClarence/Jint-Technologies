<?php
spl_autoload_register('autoLoader');
function autoLoader($className){
    $path = "classes/";
    $extenstion = ".class.php";
    $fullPath = $path . $className . $extenstion;

    include_once $fullPath;

    if(!file_exists($fullPath)){
        return false;
    }
}