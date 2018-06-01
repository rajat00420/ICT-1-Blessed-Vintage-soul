<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	/**
	 * This controller is access is common in every where.
	 * 
	
	 */
	 
	 /* it is for only admin login  */
	 
	// public $site_data;

    function __construct() {
       parent::__construct();
       // $this->site_data = array('count' => $this->count_cart());
    }
	
	public function is_admin_loggedin()
	{
		if($this->session->userdata('users')){
			$user_data  = $this->session->userdata('users');	
			if(!empty($user_data)){
				return $user_data;				
			}else{
				$baseurl = base_url();
				redirect($baseurl);
			}
			
		}else{
			$baseurl = base_url();
			redirect($baseurl);
		}
			
	}
		
}
