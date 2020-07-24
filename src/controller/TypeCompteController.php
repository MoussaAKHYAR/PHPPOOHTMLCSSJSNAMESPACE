<?php
namespace src\controller;
use libs\system\Controller;
use src\model\TypeCompteDb;

class TypeCompteController extends Controller
{
  public function add()
  {
    return $this->view->load("typeCompte/add");
  }

  public function getAll()
  {
    $typeComptedao = new TypeCompteDb();
    $typeComptes = $typeComptedao->findAll();
    return $this->view->load("typeCompte/getAll",$typeComptes);
  }
}

?>