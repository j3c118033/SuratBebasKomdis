<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Log extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_admin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'log' => [
				'type'           => 'TEXT',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('log_activity');
	}

	public function down()
	{
		$this->forge->dropTable('log_activity');
	}
}
