<?php 

spl_autoload_register(function($class){

    $class_path = str_replace('App\\', __DIR__."/", $class);

    $class_path = str_replace('\\', '/', $class_path.'.php');
    
    if(file_exists($class_path)){
        require_once $class_path;
    }
    
});

?>