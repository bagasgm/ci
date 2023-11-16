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
                'title' => 'Wow, Buku ini masuk Best Seller',
                'slug'  => 'intro',
                'content' => 'Lorem ipsum, dolor sit amet.'
            ],
            [
                'title' => 'Buku Maze Runner yang pernah mendapatkan penghargaan The Best Thriller',
                'slug' => 'isisatu',
                'content' => 'Lorem ipsum, dolor sit amet.'
            ],
            [
                'title' => 'Buku Mein Kampf yang dibuat oleh Hitler',
                'slug'    => 'isidua',
                'content' => 'Lorem ipsum, dolor sit amet.'
            ],
            [
                'title' => 'Buku dengan adaptasi Film yang luar biasa',
                'slug'    => 'isitiga',
                'content' => 'Lorem ipsum, dolor sit amet.'
            ],
            [
                'title' => 'Buku yang diadaptasi menjadi Game yang menakjubkan',
                'slug'    => 'isiempat',
                'content' => 'Lorem ipsum, dolor sit amet.'
            ]
        ];

        foreach ($news_data as $data) {
            // insert semua data ke tabel
            $this->db->table('news')->insert($data);
        }
    }
}
