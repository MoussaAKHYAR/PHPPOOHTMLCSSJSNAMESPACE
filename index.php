<?php
  require_once "config/autoloader.php";
  use src\controller\TypeCompteController;
  //header("location:login");

  $typeCompte = new TypeCompteController();
  //$typeCompte->add();
  $typeCompte->getAll();
?>