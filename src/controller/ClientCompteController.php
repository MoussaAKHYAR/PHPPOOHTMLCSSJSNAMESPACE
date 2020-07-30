<?php
//namespace src\controller;
use system\Controller;
//use src\model\CompteModel;
use src\model\PersonneModel;


class ClientCompte extends Controller
{
  
  public function __construct()
  {
    parent::__construct();
  }
  public function add()
  {
    extract($_POST);
    //var_dump($_POST);
    if ($choix_client == 'nouveau') {
      if ($choix_type_client == 'physique') {
        if ($choix_compte == 'simple') {
          $client = new Personne();//ici on cree un objet
          $clientdb = new PersonneModel();// l'objet $clientdb c pour acceder au methode qui se trouve class
          echo 1;
          var_dump($client);
          $client->setMatricule(codeAleatoire(8));
          $client->setCin($cni);
          $client->setNom($nom);
          $client->setPrenom($prenom);
          $client->setSexe($sexe);
          $client->setDateNaiss($dateNaiss);
          $client->setTelephone($telephone);
          $client->setAdrPersonne($adrPersonne);
          $client->setEmail($email);

          $ok = $clientdb->addClientPhysique($client);
          var_dump($ok);
          return $this->view->load("typeCompte/add");
          die();
          // if ($ok) {
          //   $compte = new Compte();
          //   $comptedb = new CompteModel();
          //   $compte->setNumero(codeAleatoire(8));
          //   $compte->setMatricule($client->getMatricule());
          //   $compte->setRib(2);
          //   $compte->setDateOuverture(date("Y-m-d"));
          //   $compte->setFraisOuverture(2500);
          //   $compte->setRemuneration(1000);
          //   $compte->setTypeCompte(2);
          //   $ok2 = $comptedb->addCompteSimple($compte);
          //   if ($ok2) {
          //     echo 11;
          //     return $this->view->load("typeCompte/add");;
          //   }
          // }
        }elseif($choix_compte == 'courant'){
          //$adrPersonne = 1;
          header("location:responsable?ok=$ok2");
        }else{
          //$adrPersonne = 2;
          header("location:responsable?ok=$ok2");
        }
      }else{
        if ($choix_compte == 'simple') {
          //$adrEntreprise = 1;
          header("location:responsable?ok=$ok2");
        }else{
          //$adrEntreprise = 1;
          header("location:responsable?ok=$ok2");
        }
      }
  }
    //return $this->view->load("typeCompte/add");
  }
}
function codeAleatoire($car)
  {
    $string = "";
    $chaine = "2643789ABDCEFGHJKMNPRTUVW";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++)
    {
        $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
  }

?>