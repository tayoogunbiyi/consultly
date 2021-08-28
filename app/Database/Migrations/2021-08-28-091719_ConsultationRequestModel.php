<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ConsultationRequestModel extends Migration
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
			'company_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'about'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'website'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'location'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'address'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'category'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'niche'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'duration_days'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'minimum_budget'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'recommended_budget'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'number_of_users'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'additional'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'createdAt timestamp default now()',
			'updatedAt timestamp default now() on update now()'
		]);
		$this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addKey('id', true);
		$this->forge->createTable('consultation_request');
	}

	public function down()
	{
		$this->forge->dropTable('consultation_request');
	}
}
