<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToConsultationReq extends Migration
{
	public function up()
	{
		$fields = array(
			'status' => array('type' => 'VARCHAR', 'constraint' => '100', 'default' => 'pending')
		);
		$this->forge->addColumn('consultation_request', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('consultation_request', 'status');
	}
}
