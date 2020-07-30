<?php
//namespace src\entities;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 */
class Entreprise{

/** 
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue
 */
  private $id;
  /** 
     * @ORM\Column(type="string") 
     */
  private $nom;
  /** 
     * @ORM\Column(type="string") 
     */
  private $tel;
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
     * @ORM\Column(type="string") 
     */
  private $adrEntreprise;
  /**
   * One entreprise has many comptes. This is the inverse side.
   * @ORM\OneToMany(targetEntity="Compte", mappedBy="id")
  */
  private $comptes;

  public function __construct()
  {
    $this->comptes = new ArrayCollection();
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