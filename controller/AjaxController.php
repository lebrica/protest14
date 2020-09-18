<?php


namespace protest14\Controller;


use protest14\Model\Register;

class AjaxController
{
    private $register;

    public function __construct(Register $register)
    {
        $this->register = $register;
    }

    public function getCities()
    {
        $reg_id = $_POST['reg_id'];
        $cities = $this->register->getCity($reg_id);

        echo json_encode($cities);
    }

    public function getDistrict()
    {
        $city_id = $_POST['id'];
        $districts = $this->register->getDistrict($city_id);

        echo json_encode($districts);
    }

    public function registerUser()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];


        if (isset($_POST['district'])) {
            $district = $_POST['district'];
        } else {
            $district = $city;
        }

        if ($this->register->checkMail($email)[0] == '1') {
            $user = $this->register->getUserData($email);

            echo json_encode($user);
            exit();
        } else {
            $this->register->regUser($name, $email, $district);

            echo json_encode(true);
            exit();
        }
    }
}