<?php

use Doctrine\ORM\Mapping as ORM;
//namespace src\entities;

/**
 * @ORM\Entity
 * @ORM\Table(name = "TypeCompte")
 */
class TypeCompte
{
  /** 
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
  */
  private $id;
  /** 
  * @ORM\Column(type="string") 
  */
  private $libelle;

  public function __construct()
  {
    
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of libelle
   */ 
  public function getLibelle()
  {
    return $this->libelle;
  }

  /**
   * Set the value of libelle
   *
   * @return  self
   */ 
  public function setLibelle($libelle)
  {
    $this->libelle = $libelle;

    return $this;
  }

}
?>