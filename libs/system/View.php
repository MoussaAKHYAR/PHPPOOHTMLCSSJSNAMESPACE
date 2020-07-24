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

  }
}

?>