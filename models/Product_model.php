<?php

class Product_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     public function get_all_product() {
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


}