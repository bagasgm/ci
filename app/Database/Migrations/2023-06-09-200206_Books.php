<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'title'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'page'      => [
                'type'              => 'INT',
                'constraint'        => '255'
            ],
            'author'    => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        //membuat primary key
        $this->forge->addKey('id', TRUE);
        //membuat tabel buku
        $this->forge->createTable('books', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
