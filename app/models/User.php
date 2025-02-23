<?php

class User{

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find User by email
    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);

        $row = $this->db->returnSingle();

        if($this->db->getRowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
}