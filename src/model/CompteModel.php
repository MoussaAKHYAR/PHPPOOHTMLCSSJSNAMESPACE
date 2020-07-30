<?php
namespace src\model;
use system\Model;

class CompteModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function addCompteSimple($compte)
  {
    $this->em->persist($compte);
    $this->db->flush();
    //return $compte->getId();
  }
}

?>