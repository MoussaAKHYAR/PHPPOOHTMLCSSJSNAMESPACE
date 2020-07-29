<?php

use system\Controller;

class Login extends Controller
{
   public function __construct()
   {
     parent::__construct();
   }

   public function seConnecter()
   {
     extract($_POST);
     $user = $username;
     $pass = $password;

     $userModel = new UserModel();
     $userModel->login($user,$pass);
    if ($userModel) {
      return $this->view->load("responsable/index");
    }
    else{
      echo 5555;
    }
   }
}


?>