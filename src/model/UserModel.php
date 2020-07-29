<?php
namespace src\model;
use system\Model;

class UserModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function login($username,$password)
  {
     return $this->em->createQuery("SELECT p FROM Personne p WHERE p.login ='$username' AND p.password = '$password'")->getResult();
  }
}

?>