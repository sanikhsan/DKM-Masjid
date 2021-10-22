<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel pengaturan
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nama_web'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'deskripsi_web'       => [
				'type'            => 'TEXT',
				'null'            => true
			],
            'keyword_web'         => [
				'type'            => 'TEXT',
				'null'            => true
			],
            'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'telepon'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'alamat'      => [
				'type'           => 'TEXT',
				'null'           => true,
			],
            'twitter'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'facebook'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'youtube'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'linkedin'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'instagram'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('pengaturan', TRUE);
	}

    public function down()
    {
		// menghapus tabel news
		$this->forge->dropTable('pengaturan');
	}
}
