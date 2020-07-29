<?php
namespace src\controller;
use system\Controller;

class Welcome extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * url d'acces c'est : localhost/samanemvcorm/welcome/index
     */

    public function index()
    {
        return $this->view->load("welcome/index");
    }
}

?>