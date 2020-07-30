<?php
namespace src\model;
use system\Model;

class PersonneModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function addClientPhysique($personne)
  {
    $this->em->persist($personne);
    $this->db->flush();
    return $personne->getMatricule();
  }

}

?>