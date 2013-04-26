<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_roles extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'roles' => array(
				'type' => 'VARCHAR',
				'constraint' => '30'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('roles');
	}

	public function down()
	{
		$this->dbforge->drop_table('roles');
	}	
}