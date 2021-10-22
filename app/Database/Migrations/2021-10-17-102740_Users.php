<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
		// Membuat kolom/field untuk tabel users
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'motto'      => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'Administrator',
			],
            'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('users', TRUE);
	}

    public function down()
    {
        // menghapus tabel users
		$this->forge->dropTable('users');
    }
}
