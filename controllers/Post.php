<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

     /*
     * Description   :   Add Blog
     */

    public function add_blog() {
        $this->is_admin_loggedin();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/add_blog');
    }

    /*
     * Description   :   Manage Blog
     */

    function manage_blog() {
        $this->is_admin_loggedin();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/view_blog');
    }
}