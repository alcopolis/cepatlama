<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Backend_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->data['page_title'] = 'Manage Users';
	}
	
	public function index(){
		$this->data['users'] = $this->users_m->get();
		
		$this->data['subview'] = 'backend/user/index';
		$this->load->view('backend/_layout_main', $this->data);	
		//echo hash('sha512', 'passwordiE7215CPg345LZbiPGjBBVyJiXMB8e1F');
	}
	
	public function login(){
		$dashboard = 'backend/dashboard';
		$this->users_m->loggedin() == FALSE || redirect($dashboard);
		
		$rules = $this->users_m->rules; //Get the rules setting
		$this->form_validation->set_rules($rules);
				
		if($this->form_validation->run() == TRUE){
			//We can login and redirect
			if ($this->users_m->login() == TRUE) {
				//echo 'exist';	
				redirect($dashboard);			
    		}else{
				//echo 'No user found';
				$this->session->set_flashdata('error', 'Email/password combination does not exist');
				redirect('backend/users/login', 'refresh');	
			}
		}
		
		$this->data['subview'] = 'backend/user/login';
		$this->load->view('backend/_layout_modal', $this->data);
	}
	
	public function logout(){
		$this->users_m->logout();
		redirect('backend/users/login');
	}
	
	public function edit($id){
		echo 'edit';
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