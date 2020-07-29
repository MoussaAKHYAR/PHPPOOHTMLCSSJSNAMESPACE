<?php
namespace system;

class Model
{
    protected $em;
    public function __construct()
    {
        require "bootstrap.php";

        $this->em = $entityManager;
    }
}
?>