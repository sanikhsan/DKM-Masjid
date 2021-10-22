<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komisi extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel komisi
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
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel komisi
		$this->forge->createTable('komisi', TRUE);
	}

    public function down()
    {
        // menghapus tabel komisi
		$this->forge->dropTable('komisi');
    }
}
