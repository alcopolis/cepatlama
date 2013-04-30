<?php

class Dashboard extends Backend_Controller{
	public function __construct(){
		parent::__construct();	
	}
	
	public function index(){
		$this->load->view('backend/_layout_main', $this->data);	
	}
	
	public function modal(){
		$this->load->view('backend/_layout_modal', $this->data);	
	}
}