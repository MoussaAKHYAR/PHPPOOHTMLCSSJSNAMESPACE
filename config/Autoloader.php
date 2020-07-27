<?php
class Autoloader
{
  /**
   * cette fonction va enregistrer une fonction nommée autoload déclarée la dessous
   */
  static function register()
  {
    spl_autoload_register([__CLASS__,"autoload"]);
  }

  /**
   * cette fonction à son tour reçoit tout classe qui est instanciée soit son namespace ou le chemin absolut de la classe
   */
  static function autoload($class)
  {
    //echo $class;
    //echo str_replace("\\","/",$class);
    if(file_exists("src/model/".$class.".php"))
    {
      require_once "src/model/".$class.".php";

    }else if (file_exists("src/controller/".$class.".php"))
    {
      require_once "src/controller/".$class.".php";

    }else if (file_exists(str_replace("\\","/",$class.".php")))
    {
      require_once str_replace("\\","/",$class.".php");
    }
    else{
      
      die("Merci d'utiliser Use suivie de ".$class);
    }
  }
}
Autoloader::register();
?>