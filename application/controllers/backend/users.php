<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Backend_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->data['page_title'] = 'Manage Users';
	}
	
	public function index($user_name = NULL){
		$this->load->view('backend/_layout_main', $this->data);	
		//echo hash('sha512', 'tes123iE7215CPg345LZbiPGjBBVyJiXMB8e1F');
	}
	
	public function login(){
		//$dashboard = 'backend/dashboard';
		//$this->users_m->loggedin() == FALSE || redirect($dashboard);
		
		$rules = $this->users_m->rules; //Get the rules setting
		$this->form_validation->set_rules($rules);
		
		//print_r($this->users_m->rules);
		//print_r($this->form_validation);
		
		if($this->form_validation->run() == TRUE){
			//We can login and redirect
			if ($this->users_m->login() == TRUE) {
				echo 'exist';
				//redirect($dashboard);
    		}else{
				echo 'No user found';	
			}
		}
		
		$this->data['subview'] = 'backend/user/login';
		$this->load->view('backend/_layout_modal', $this->data);
	}
	
	public function logout(){
		$this->users_m->logout();
		redirect('backend/users/login');
	}
	
	public function save($data, $id){
		$data = array(
			//'email' => 'myseconddigitalmail@yahoo.com',
			//'password' => '',
			'name' => 'Adriant R',
			'role' => '1'
		);
		
		$id = $this->users_m->save($data, 1);
		var_dump($id);
	}
	
	public function delete($id){
		$this->users_m->delete($id);
		echo 'record deleted';
	}
}