<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sambutan extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel samutan
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
            'tautan_youtube'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel sambutan
		$this->forge->createTable('sambutan', TRUE);
	}

    public function down()
    {
        // menghapus tabel sambutan
		$this->forge->dropTable('sambutan');
    }
}
