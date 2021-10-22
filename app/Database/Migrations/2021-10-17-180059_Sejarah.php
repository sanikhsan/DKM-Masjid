<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sejarah extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel sejarah
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

		// Membuat tabel sejarah
		$this->forge->createTable('sejarah', TRUE);
	}

    public function down()
    {
        // menghapus tabel sejarah
		$this->forge->dropTable('sejarah');
    }
}
