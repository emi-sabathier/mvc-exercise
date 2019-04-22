<?php
namespace recipes;
class Autoloader {
    static function register(){        
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
    static function autoload($class_name){
            $class_name = str_replace(__NAMESPACE__ . '\\','',$class_name);
            require $class_name . '.php';       
    }
}