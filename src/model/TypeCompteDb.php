<?php
namespace src\model;
use libs\system\Model;
class TypeCompteDb extends Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function findAll()
  {
    return ["COMPTE SIMPLE","COMPTE BLOQUE"];
  }
}
?>