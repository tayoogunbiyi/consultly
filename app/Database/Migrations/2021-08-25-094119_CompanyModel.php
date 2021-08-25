<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CompanyModel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'users_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'unique' => true,
			],
			'number'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'unique' => true,
			]
		]);
		$this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addKey('id', true);
		$this->forge->createTable('companies');
	}

	public function down()
	{
		$this->forge->dropTable('companies');
	}
}
