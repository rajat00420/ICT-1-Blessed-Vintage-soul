<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Home_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('json');
    }

    public function index() {
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $product_data['product_data'] = $this->Product_model->get_all_product();
        $this->load->view('home/index',$product_data);
        $this->load->view('home/include/footer');
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

            $data = $this->Home_model->user_login($email, $password);
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

                if ($session_data['user_id'] == true && $session_data['user_type'] == 1) {
                    $a = array("status" => "true");
                    echo json_encode($a);
                }
            }
        }
    }

    public function signup() {
//        $this->is_admin_loggedin();
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('home/signup');
        $this->load->view('home/include/footer');
    }
    
     public function contact() {
//        $this->is_admin_loggedin();
        $this->load->view('home/include/topbar');
        $this->load->view('home/include/navbar');
        $this->load->view('home/contact');
        $this->load->view('home/include/footer');
    }

    /* Save User */

    public function save_user() {
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('email_id', 'Email', 'trim|xss_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $d = validation_errors();
            echo json_return("false", $d);
            exit();
        } else {

            $emailid = $this->input->post('email');
            $name = $this->input->post('user_name');
            $data = array('name' => $name, 'email' => $emailid,
                'password' => md5($this->input->post('password')),
                'user_type' => '1',
                'status' => '1',
                'created' => date('Y-m-d H:i:s'));
//            print_r($data);die;
            $InsertUser = $this->Home_model->save_user($data);
            if (!empty($InsertUser)) {
//             
               $a = array("status" => "true");
                echo json_encode($a);
                die;
            }
        }
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
