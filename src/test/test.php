<?php
require_once '../../bootstrap.php';

  $typeCompte = new TypeCompte();

  $typeCompte->setLibelle("Compte courant");

  $entityManager->persist($typeCompte);
  $entityManager->flush();

  echo $typeCompte->getId();

?>