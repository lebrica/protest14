<?php


namespace protest14\Model;


use protest14\Component\DB;

/**
 * Class Register
 * @package protest14\Model
 */
class Register
{
    private $db;

    public function __construct(DB $db)
    {
        $this->db = $db->getConnection();
    }

    /**
     * @return array
     */
    public function getRegion()
    {
        $stmt = $this->db->prepare("SELECT  *FROM t_koatuu_tree WHERE ter_type_id = :id");
        $stmt->execute(['id' => 0]);

        return $stmt->fetchAll();
    }

    /**
     * @param $reg_id
     * @return array
     */
    public function getCity($reg_id)
    {
        $stmt = $this->db->prepare("SELECT  * FROM t_koatuu_tree WHERE  reg_id = :r_id AND ter_type_id = :t_id");
        $stmt->execute(['r_id' =>$reg_id, 't_id' => '01']);

        return $stmt->fetchAll();
    }

    /**
     * @param $ter_pid
     * @return array
     */
    public function getDistrict($ter_pid)
    {
        $stmt = $this->db->prepare("SELECT  * FROM t_koatuu_tree WHERE  ter_pid = :t_pid AND ter_type_id = :t_id");
        $stmt->execute(['t_pid' =>$ter_pid, 't_id' => '03']);

        return $stmt->fetchAll();
    }

    /**
     * @param $name
     * @param $email
     * @param $territory
     * @return bool
     */
    public function regUser($name, $email, $territory)
    {
        $stmt = $this->db->prepare("INSERT INTO  users (name , email, territory) VALUES (:name, :email, :territory)");
        return $stmt->execute([':name' => $name, ':email' => $email, 'territory' => $territory]);
    }

    /**
     * @param $email
     * @return mixed
     */
    public function checkMail($email)
    {
        $stmt = $this->db->prepare("SELECT EXISTS(SELECT email FROM users WHERE email = :email)");
        $stmt->execute(['email' =>$email]);
        return $stmt->fetch();
    }

    /**
     * @param $email
     * @return mixed
     */
    public function getUserData($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users u LEFT JOIN t_koatuu_tree t ON u.territory = t.ter_id WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }

}