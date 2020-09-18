<?php


namespace protest14\Controller;


use protest14\Model\Register;

class RegisterController
{

    private $register;

    public function __construct(Register $register)
    {
        $this->register = $register;
    }

    public function index()
    {
        $regions = $this->register->getRegion();

        return require_once (ROOT. '/view/registration.php');
    }
}


