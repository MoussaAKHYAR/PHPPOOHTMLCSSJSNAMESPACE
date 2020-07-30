<?php
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }
    static function autoload($class)
    {
        if (file_exists(str_replace("\\","/", $class.".php"))) {
            
            require_once str_replace("\\","/", $class.".php");
            //echo 1;

        }else if (file_exists(str_replace("\\","/",$class."Controller.php"))) {
            
            require_once str_replace("\\","/",$class."Controller.php");

        }else if (file_exists(str_replace("\\","/",$class."Model.php"))) {
            
            require_once str_replace("\\","/",$class."Model.php");

        }else {
            die("Merci de verifier les namespaces ");
        }
    

    }
}
Autoloader::register();
?>