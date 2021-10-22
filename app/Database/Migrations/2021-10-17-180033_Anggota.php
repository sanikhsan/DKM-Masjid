<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel anggota
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'jabatan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'image VARCHAR(100) null',
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel anggota
		$this->forge->createTable('anggota', TRUE);
	}

    public function down()
    {
        // menghapus tabel anggota
		$this->forge->dropTable('anggota');
    }
}
