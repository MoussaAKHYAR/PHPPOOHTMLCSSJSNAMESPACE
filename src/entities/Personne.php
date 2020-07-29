<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
//namespace src\entities;

/**
 * @ORM\Entity
 * @ORM\Table(name = "personne")
 */
class Personne
{
  /** 
   * @ORM\Id
   * @ORM\Column(type="string")
   */
  private $matricule;
  /** 
  * @ORM\Column(type="string") 
  */
  private $cin;
  /** 
  * @ORM\Column(type="string") 
  */
  private $nom;
  /** 
  * @ORM\Column(type="string") 
  */
  private $prenom;
  /** 
  * @ORM\Column(type="string") 
  */
  private $sexe;
  /** 
  * @ORM\Column(type="string") 
  */
  private $dateNaiss;
  /** 
  * @ORM\Column(type="string") 
  */
  private $telephone;
  /** 
  * @ORM\Column(type="string") 
  */
  private $adrPersonne;
  /** 
  * @ORM\Column(type="string") 
  */
  private $email;
  /** 
  * @ORM\Column(type="string") 
  */
  private $login;
  /** 
  * @ORM\Column(type="string") 
  */
  private $password;
  /**
   * One personne has many comptes. This is the inverse side.
   * @ORM\OneToMany(targetEntity="Compte", mappedBy="matricule")
  */
  private $comptes;

  public function __construct()
  {
    $this->comptes = new ArrayCollection();
  }

  /**
   * Get the value of matricule
   */ 
  public function getMatricule()
  {
    return $this->matricule;
  }

  /**
   * Set the value of matricule
   *
   * @return  self
   */ 
  public function setMatricule($matricule)
  {
    $this->matricule = $matricule;

    return $this;
  }

  /**
   * Get the value of cin
   */ 
  public function getCin()
  {
    return $this->cin;
  }

  /**
   * Set the value of cin
   *
   * @return  self
   */ 
  public function setCin($cin)
  {
    $this->cin = $cin;

    return $this;
  }

  /**
   * Get the value of nom
   */ 
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */ 
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get the value of prenom
   */ 
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * Set the value of prenom
   *
   * @return  self
   */ 
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Get the value of sexe
   */ 
  public function getSexe()
  {
    return $this->sexe;
  }

  /**
   * Set the value of sexe
   *
   * @return  self
   */ 
  public function setSexe($sexe)
  {
    $this->sexe = $sexe;

    return $this;
  }

  /**
   * Get the value of dateNaiss
   */ 
  public function getDateNaiss()
  {
    return $this->dateNaiss;
  }

  /**
   * Set the value of dateNaiss
   *
   * @return  self
   */ 
  public function setDateNaiss($dateNaiss)
  {
    $this->dateNaiss = $dateNaiss;

    return $this;
  }

  /**
   * Get the value of telephone
   */ 
  public function getTelephone()
  {
    return $this->telephone;
  }

  /**
   * Set the value of telephone
   *
   * @return  self
   */ 
  public function setTelephone($telephone)
  {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * Get the value of adrPersonne
   */ 
  public function getAdrPersonne()
  {
    return $this->adrPersonne;
  }

  /**
   * Set the value of adrPersonne
   *
   * @return  self
   */ 
  public function setAdrPersonne($adrPersonne)
  {
    $this->adrPersonne = $adrPersonne;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of login
   */ 
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */ 
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of password
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of adrEntreprise
   */ 
  public function getComptes()
  {
    return $this->comptes;
  }

  /**
   * Set the value of adrEntreprise
   *
   * @return  self
   */ 
  public function setComptes($comptes)
  {
    $this->comptes = $comptes;

    return $this;
  }
}
?>