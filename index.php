<?php

spl_autoload_register('autoLoader');
function autoLoader($className){
    $path = "classes/";
    $extenstion = ".class.php";
    $fullPath = $path . $className . $extenstion;

    include_once $fullPath;
}

require('function.php');

require('router.php');

