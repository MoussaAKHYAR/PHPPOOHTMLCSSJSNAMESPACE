<?php

use system\Controller;
use src\model\UserModel;

class Login extends Controller
{
   public function __construct()
   {
     parent::__construct();
   }

   public function seConnecter()
   {
     extract($_POST);
     $user = $nomUtilisateur;
     $pass = $password;

     $userModel = new UserModel();
     $ok = $userModel->login($user,$pass);
      //var_dump($ok)
    if ($ok) {
      return $this->view->load("responsable/index");
    }
    else{
      return $this->view->load("welcome/index");
    }
   }
}


?>