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

  }
}
Autoloader::register();
?>