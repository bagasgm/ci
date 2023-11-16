<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Books extends Seeder
{
    public function run()
    {
        $Books_data = [
            [
                'title'     => 'Mein Kampf',
                'page'      => '100',
                'author'    => 'Hitler'
            ],
            [
                'title'     => 'Maze Runner',
                'page'      => '150',
                'author'    => 'Siti'
            ],
            [
                'title'     => 'FGO',
                'page'      => '50',
                'author'    => 'Situ'
            ]
        ];

        foreach ($Books_data as $data) {
            $this->db->table('Books')->insert($data);
        }
    }
}
