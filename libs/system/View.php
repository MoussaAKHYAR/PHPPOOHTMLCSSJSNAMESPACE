<?php
namespace libs\system;

class View
{
  public function __construct()
  {
    
  }

  /**
   * cette fonction permet d'effectuer le chargement des vues on declare 2 variables dont la premiere se chargera de compter le nombre d'argument et la seconde qui va recuperer les arguments passer par l'utilisateur vu qu'en PHP il n'y a pas la notion de surcharge de methode (on peut pas declarer 3 fois la methode load et jouer sur les arguments)
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