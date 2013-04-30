<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Backend_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('users_m');
	}
	
	public function index(){
		/*$users = $this->users_m->get();
		var_dump($users);*/
		
		echo "USERS DASHBOARD";
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