<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends MY_Model{
	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'order';
	protected $_rules = array();
	protected $_timestamps = FALSE;	
}