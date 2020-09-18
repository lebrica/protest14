<?php


namespace protest14\Controller;


use protest14\Model\Home;

class MainController
{
    private $home;

    public function __construct(Home $home)
    {
        $this->home = $home;
    }

    public function index()
    {
        return require_once (ROOT. '/view/main.php');
    }
}