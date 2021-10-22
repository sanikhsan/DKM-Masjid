<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeri extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel galeri
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'title'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
            'image VARCHAR(100) null',
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel galeri
		$this->forge->createTable('galeri', TRUE);
	}

    public function down()
    {
        // menghapus tabel galeri
		$this->forge->dropTable('galeri');
    }
}
