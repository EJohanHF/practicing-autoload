<?php

function customAutoload($className) {
    $filePath = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    //$filePath = "../".str_replace('\\', '/', $className) . '.php';
    //echo $filePath; 
    if (file_exists($filePath)) {
        require_once($filePath);
    }
}

spl_autoload_register('customAutoload');
