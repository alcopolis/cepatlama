<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Backend_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('users_m');
	}
	
	public function index(){
		$users = $this->users_m->get();
		var_dump($users);
	}
}