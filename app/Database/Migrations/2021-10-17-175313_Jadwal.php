<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel jadwal
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'waktu'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('jadwal', TRUE);
	}

    public function down()
    {
        // menghapus tabel jadwal
		$this->forge->dropTable('jadwal');
    }
}
