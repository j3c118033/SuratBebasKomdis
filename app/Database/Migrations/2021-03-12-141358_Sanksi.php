<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sanksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'TEXT',
			],
			'lapor' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'null'			 => TRUE,
			],

			'skorsing' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'null'			 => TRUE,
			],

			'drop_out' => [
				'type'           => 'INT',
				'constraint'     => 1,
				'default'		 => 0,
			],
			'lainnya'       => [
				'type'           => 'TEXT',
				'null'			 => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('sanksi');
	}

	public function down()
	{
		$this->forge->dropTable('sanksi');
	}
}
