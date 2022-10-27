<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // membuat data
        $news_data = [
            [ 'title' => 'Selamat datang di Codeigniter',
            'slug' => 'codeigniter-intro',
            'content' => 'Pengenalan codeiginiter untuk pemula',
            ],
            [
                'title' => 'Hello World',
                'slug' => 'hello-world',
                'content' => 'Hello World, ini adalah contoh artikel',
            ],
            [
                'title' => 'Meetup komunitas Codeigniter Indonesia',
                'slug' => 'codeigniter-meetup',
                'content' => 'Seru sekali Meetup perdana Codeigniter di Indonesia'
            ]
        ];
        foreach($news_data as $data){
            // insert semua data ke table
            $this->db->table('news')->insert($data);
        }
    }
}
