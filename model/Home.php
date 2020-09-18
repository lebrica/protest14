<?php


namespace protest14\Model;


use protest14\Component\DB;

class Home
{
    private $db;

    public function __construct(DB $db)
    {
        $this->db = $db->getConnection();
    }

}