<?php

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

        public function user_login($email, $password) {
        $varPassword = md5($password);
        $condition = "email='" . $email . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $varPassword);
        $this->db->where('status', '1');
        $this->db->where('user_type', '1');
        $query = $this->db->get();
//        $this->db->last_query();die;
//print_r($query->num_rows());die;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    
     public function save_user($data) {
        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


}