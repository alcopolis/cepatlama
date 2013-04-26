<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Clean_db extends CI_Migration {

	public function up()
	{
		$this->dbforge->drop_table();
	}

	public function down()
	{
		$this->dbforge->drop_table();
	}	
}