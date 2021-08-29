<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAdminToUser extends Migration
{
	public function up()
	{
		$fields = array(
			'is_admin' => array('type' => 'BOOLEAN', 'default' => FALSE)
		);
		$this->forge->addColumn('users', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('users', 'is_admin');
	}
}
