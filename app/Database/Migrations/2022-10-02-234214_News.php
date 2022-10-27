<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        // membuat field untuk tabel news
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => 'John Doe',
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['published', 'draft'],
                'dafault' => 'draft',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            

        ]);

        // membuat primary key
        $this->forge->addKey('id', TRUE);

        // membuat table news
        $this->forge->createTable('news', TRUE);
    }


    public function down()
    {
        //menghapus table news
        $this->forge->dropTable('news');
    }
}
