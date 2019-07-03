<?php

spl_autoload_register(function ($nombre_clase){
    $directorys = array(
      'clases/',
      'controladores/'  
    );
    
    foreach ($directorys as $directory){
        $ruta = $_SERVER['DOCUMENT_ROOT'].'/taxiseguro/';
        if(file_exists($ruta.$directory.$nombre_clase.'.php')){
            require_once($ruta.$directory.$nombre_clase.'.php');
        }
    }
});

