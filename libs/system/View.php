<?php
namespace libs\system;
class View
{
  public function __construct()
  {
    
  }
/**
 * cette fonction permet de charger les vues on y declare 2 variabes, la premiere va compter le nombre d'argument et la seconde va recuperer les argument vu q'avec php on n'a pas la notion de surcharge de methode( declare plusieurs fois une meme methode mais qui fait des traitement different)
 */
  public function load()
  {
    $num = func_num_args();
    $args = func_get_args();

    switch ($num) {
      case 1:
        $file = "src/view/".$args[0].".php";
        if (file_exists($file)) {
          require_once $file;
        }else{
          die($file."n'existe pas comme vue");
        }
        break;
      case 2:
        $file = "src/view/".$args[0].".php";
        if (file_exists($file)) {
          $data = $args[1];
          require_once $file;
        }else{
          die($file."n'existe pas comme vue");
        }
        break;
    }

  }
}

?>