<?php
namespace src\model;
use libs\system\Model;
class TypeCompteDb extends Model
{
  public function findAll()
  {
    return ["CMPTE SIMPLE","COMPTE BLOQUE"];
  }
}
?>