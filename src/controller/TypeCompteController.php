<?php
namespace src\controller;
use libs\system\Controller;

class TypeCompteController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function add()
  {
    
  
    return $this->view->load("typeCompte/add");
  }

}

?>