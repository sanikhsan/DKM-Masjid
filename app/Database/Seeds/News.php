<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // membuat data
		$news_data = [
			[
				'title' => 'Halaman Utama',
				'slug'  => 'intro-uji-coba',
				'content' => 'Selamat datang di Halaman Utama.',
				'categories' => 'berita',
			],
			[
				'title' => 'Hello World',
				'slug' => 'hello-world',
				'content' => 'Hello World, ini contoh artikel',
				'categories' => 'berita',
			],
			[
				'title' => 'Meetup komunitas',
				'slug'	=> 'komunitas-meetup',
				'content' => 'Seru sekali meetup perdana komunitas..',
				'categories' => 'acara',
			]
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('news')->insert($data);
		}
    }
}
