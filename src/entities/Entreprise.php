<?php

/**
 * @Entity
 * @Table(name="entreprise")
 */
class Entreprise{

  private $id;
  private $nom;
  private $tel;
  private $email;
  private $login;
  private $password;
  private $adrEntreprise;

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
   * Get the value of tel
   */ 
  public function getTel()
  {
    return $this->tel;
  }

  /**
   * Set the value of tel
   *
   * @return  self
   */ 
  public function setTel($tel)
  {
    $this->tel = $tel;

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
  public function getAdrEntreprise()
  {
    return $this->adrEntreprise;
  }

  /**
   * Set the value of adrEntreprise
   *
   * @return  self
   */ 
  public function setAdrEntreprise($adrEntreprise)
  {
    $this->adrEntreprise = $adrEntreprise;

    return $this;
  }
}

?>