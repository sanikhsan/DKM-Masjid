<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jumat extends Migration
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
            'imam'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'khatib'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'muadzin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'bilal'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'tanggal'      => [
				'type'           => 'DATE',
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('jumat', TRUE);
	}

    public function down()
    {
        // menghapus tabel jadwal
		$this->forge->dropTable('jumat');
    }
}
