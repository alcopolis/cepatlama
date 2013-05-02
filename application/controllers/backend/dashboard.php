<?php

class Dashboard extends Backend_Controller{
	public function __construct(){
		parent::__construct();	
		
		$this->data['page_title'] = 'Welcome';
	}
	
	public function index(){
		$this->data['subview'] = 'backend/dashboard/index';
		$this->load->view('backend/_layout_main', $this->data);
	}
	
	public function modal(){
		$this->load->view('backend/_layout_modal', $this->data);	
	}
}