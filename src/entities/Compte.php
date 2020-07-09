<?php

class Compte
{
  private $numero;
  private $mat;
  private $id;
  private $rib;
  private $solde;
  private $dateOuverture;
  private $raisonSocial;
  private $salaire;
  private $nomEmployeur;
  private $telEmployeur;
  private $numeroIdentification;
  private $agios;
  private $fraisOuverture;
  private $remuneration;
  private $dateDebut;
  private $dateFin;
  private $typeCompte;
  

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
   * Get the value of mat
   */ 
  public function getMat()
  {
    return $this->mat;
  }

  /**
   * Set the value of mat
   *
   * @return  self
   */ 
  public function setMat($mat)
  {
    $this->mat = $mat;

    return $this;
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
   * Get the value of rib
   */ 
  public function getRib()
  {
    return $this->rib;
  }

  /**
   * Set the value of rib
   *
   * @return  self
   */ 
  public function setRib($rib)
  {
    $this->rib = $rib;

    return $this;
  }

  /**
   * Get the value of solde
   */ 
  public function getSolde()
  {
    return $this->solde;
  }

  /**
   * Set the value of solde
   *
   * @return  self
   */ 
  public function setSolde($solde)
  {
    $this->solde = $solde;

    return $this;
  }

  /**
   * Get the value of dateOuverture
   */ 
  public function getDateOuverture()
  {
    return $this->dateOuverture;
  }

  /**
   * Set the value of dateOuverture
   *
   * @return  self
   */ 
  public function setDateOuverture($dateOuverture)
  {
    $this->dateOuverture = $dateOuverture;

    return $this;
  }

  /**
   * Get the value of raisonSocial
   */ 
  public function getRaisonSocial()
  {
    return $this->raisonSocial;
  }

  /**
   * Set the value of raisonSocial
   *
   * @return  self
   */ 
  public function setRaisonSocial($raisonSocial)
  {
    $this->raisonSocial = $raisonSocial;

    return $this;
  }

  /**
   * Get the value of salaire
   */ 
  public function getSalaire()
  {
    return $this->salaire;
  }

  /**
   * Set the value of salaire
   *
   * @return  self
   */ 
  public function setSalaire($salaire)
  {
    $this->salaire = $salaire;

    return $this;
  }

  /**
   * Get the value of nomEmployeur
   */ 
  public function getNomEmployeur()
  {
    return $this->nomEmployeur;
  }

  /**
   * Set the value of nomEmployeur
   *
   * @return  self
   */ 
  public function setNomEmployeur($nomEmployeur)
  {
    $this->nomEmployeur = $nomEmployeur;

    return $this;
  }

  /**
   * Get the value of telEmployeur
   */ 
  public function getTelEmployeur()
  {
    return $this->telEmployeur;
  }

  /**
   * Set the value of telEmployeur
   *
   * @return  self
   */ 
  public function setTelEmployeur($telEmployeur)
  {
    $this->telEmployeur = $telEmployeur;

    return $this;
  }

  /**
   * Get the value of numeroIdentification
   */ 
  public function getNumeroIdentification()
  {
    return $this->numeroIdentification;
  }

  /**
   * Set the value of numeroIdentification
   *
   * @return  self
   */ 
  public function setNumeroIdentification($numeroIdentification)
  {
    $this->numeroIdentification = $numeroIdentification;

    return $this;
  }

  /**
   * Get the value of agios
   */ 
  public function getAgios()
  {
    return $this->agios;
  }

  /**
   * Set the value of agios
   *
   * @return  self
   */ 
  public function setAgios($agios)
  {
    $this->agios = $agios;

    return $this;
  }

  /**
   * Get the value of fraisOuverture
   */ 
  public function getFraisOuverture()
  {
    return $this->fraisOuverture;
  }

  /**
   * Set the value of fraisOuverture
   *
   * @return  self
   */ 
  public function setFraisOuverture($fraisOuverture)
  {
    $this->fraisOuverture = $fraisOuverture;

    return $this;
  }

  /**
   * Get the value of remuneration
   */ 
  public function getRemuneration()
  {
    return $this->remuneration;
  }

  /**
   * Set the value of remuneration
   *
   * @return  self
   */ 
  public function setRemuneration($remuneration)
  {
    $this->remuneration = $remuneration;

    return $this;
  }

  /**
   * Get the value of dateDebut
   */ 
  public function getDateDebut()
  {
    return $this->dateDebut;
  }

  /**
   * Set the value of dateDebut
   *
   * @return  self
   */ 
  public function setDateDebut($dateDebut)
  {
    $this->dateDebut = $dateDebut;

    return $this;
  }

  /**
   * Get the value of dateFin
   */ 
  public function getDateFin()
  {
    return $this->dateFin;
  }

  /**
   * Set the value of dateFin
   *
   * @return  self
   */ 
  public function setDateFin($dateFin)
  {
    $this->dateFin = $dateFin;

    return $this;
  }

  /**
   * Get the value of typeCompte
   */ 
  public function getTypeCompte()
  {
    return $this->typeCompte;
  }

  /**
   * Set the value of typeCompte
   *
   * @return  self
   */ 
  public function setTypeCompte($typeCompte)
  {
    $this->typeCompte = $typeCompte;

    return $this;
  }
}
?>