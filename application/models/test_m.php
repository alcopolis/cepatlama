<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_m extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->data['msg'] = 'asdassadfasdfasdfasdfasdfasdfas';	
	}
}