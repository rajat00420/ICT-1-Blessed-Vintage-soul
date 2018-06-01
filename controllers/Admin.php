<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('admin/include/header');
        // $this->load->view('admin/signup');
        $this->load->view('admin/login');
    }

    public function login_user() {
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('email', 'EmailID', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $d = validation_errors();
            echo json_return("false", $d);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $data = $this->User_model->user_login($email, $password);
            if (empty($data)) {
                echo json_return("false1", "Emailid or Pasword does not match.");
            } else {
                $varSession = array(
                    'user_id' => $data[0]->user_id,
                    'email' => $data[0]->email,
                    'user_type' => $data[0]->user_type,
                    'user_name' => $data[0]->name,
                );
                $this->load->library('session');
                $this->session->set_userdata('users', $varSession);
                $session_data = $this->session->userdata('users');

                if ($session_data['user_id'] == true && $session_data['user_type'] == 0) {
                    $a = array("status" => "true");
                    echo json_encode($a);
                }
            }
        }
    }

    public function dashboard() {
//        $this->is_admin_loggedin();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/dashboard');
    }

     /*
     * Description   :   View All Product
     */

    function view_user_post() {
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/view_user_post');
    }

    
    /*
     * Description   :   View All Users
     */

    function all_users() {
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/include/leftsidebar');
        $this->load->view('admin/view_users');
    }

    public function logout() {
        $this->session->unset_userdata('users');
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        $baseurl = base_url();
        redirect($baseurl);
    }

}
