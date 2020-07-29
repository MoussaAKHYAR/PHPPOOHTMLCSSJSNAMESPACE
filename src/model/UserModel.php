<?php

use system\Model;

class UserModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login($username,$password)
  {
     return $this->em->createQuery("SELECT p FROM src\entities\Personne p WHERE p.login ='$username' AND p.password = '$password'")->getResult();
  }
}

?>