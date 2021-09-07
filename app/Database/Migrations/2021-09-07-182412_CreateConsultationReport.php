<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateConsultationReport extends Migration
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
			'request_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'success_probability'       => [
				'type'       => 'DOUBLE',
			],
			'summary'       => [
				'type'       => 'TEXT'
			],
			'category'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'duration'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'min_users'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'max_users'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'feasibility'       => [
				'type'       => 'TEXT'
			],
			'createdAt timestamp default now()',
			'updatedAt timestamp default now() on update now()'
		]);
		$this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('request_id', 'consultation_request', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addKey('id', true);
		$this->forge->createTable('consultation_report');
	}

	public function down()
	{
		$this->forge->dropTable('consultation_report');
	}
}
