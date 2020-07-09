<?php

/**
 * @Entity
 * @Table(name = "personne")
 */
class Personne
{
  private $numero;
  private $cin;
  private $nom;
  private $prenom;
  private $sexe;
  private $dateNaiss;
  private $telephone;
  private $adrPersonne;
  private $email;
  private $login;
  private $password;

  public function __construct()
  {
    
  }

  /**
   * Get the value of numero
   */ 
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of numero
   *
   * @return  self
   */ 
  public function setNumero($numero)
  {
    $this->numero = $numero;

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
}
?>