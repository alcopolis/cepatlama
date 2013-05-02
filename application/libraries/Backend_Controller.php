<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend_Controller extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		
		//Load CI built-in modules
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		//Load necessary models
		$this->load->model('users_m');
		
		//General Settings
		$this->data['meta_title'] = 'Innovate';	
		
		//Login Check
		$exception_uris = array('backend/users/login', 'backend/users/logout');
		
		if (in_array(uri_string(), $exception_uris) == FALSE){
			if($this->users_m->loggedin() == FALSE){
				redirect('backend/users/login');
			}
		}
	}
}