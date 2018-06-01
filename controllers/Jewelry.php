<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jewelry extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
//        $this->load->model('Saree_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('json');
    }

    public function earrings_wear() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/earring');
        $this->load->view('home/include/footer');
    }
    
    public function necklace() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/necklace');
        $this->load->view('home/include/footer');
    }
    
     public function bangle() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/bangle');
        $this->load->view('home/include/footer');
    }
    
    public function ring() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/ring');
        $this->load->view('home/include/footer');
    }

    public function detail() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/detail');
        $this->load->view('home/include/footer');
    }
    
    public function basket() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/basket');
        $this->load->view('home/include/footer');
    }
    
    public function checkout1() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/checkout1');
        $this->load->view('home/include/footer');
    }
    
     public function checkout2() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/checkout2');
        $this->load->view('home/include/footer');
    }
    
     public function checkout3() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/checkout3');
        $this->load->view('home/include/footer');
    }
    
     public function checkout4() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('jewelry/checkout4');
        $this->load->view('home/include/footer');
    }

    

}
