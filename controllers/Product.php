<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

/*
     * Description   :   Add New Product
     */

    public function add_product() {
        $this->is_admin_loggedin();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/add_product');
    }

    /*
     * Description   :   View All Product
     */

    function all_product() {
        $this->is_admin_loggedin();
        $this->load->helper(array('form'));

        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/view_product');
    }
    
    /*
     * Description   :   View All Product
     */

   /*
    * Description   :   Manage Venue
    */
    function manage_veneus() {
        if ($this->session->userdata('users')) {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/leftsidebar');
        $veneu_data['veneu_data'] = $this->Venue_model->all_venues();
        if (!empty($veneu_data)) {
            $this->load->view('admin/view_veneus', $veneu_data);
        }
        }
    else{
        $base_url=base_url('welcome/logout');
           redirect ($base_url);
        }
    }
}