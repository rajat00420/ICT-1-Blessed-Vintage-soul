<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Saree extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
//        $this->load->model('Saree_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('json');
    }

    public function party_wear() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/party_wear');
        $this->load->view('home/include/footer');
    }
    
    public function bridal_wear() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/bridal_wear');
        $this->load->view('home/include/footer');
    }
    
     public function festive_wear() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/festive_wear');
        $this->load->view('home/include/footer');
    }
    
    public function printed_wear() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/printed_wear');
        $this->load->view('home/include/footer');
    }

    public function detail() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/detail');
        $this->load->view('home/include/footer');
    }
    
    public function basket() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/basket');
        $this->load->view('home/include/footer');
    }
    
    public function checkout1() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/checkout1');
        $this->load->view('home/include/footer');
    }
    
     public function checkout2() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/checkout2');
        $this->load->view('home/include/footer');
    }
    
     public function checkout3() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/checkout3');
        $this->load->view('home/include/footer');
    }
    
     public function checkout4() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('saree/checkout4');
        $this->load->view('home/include/footer');
    }

    

}
