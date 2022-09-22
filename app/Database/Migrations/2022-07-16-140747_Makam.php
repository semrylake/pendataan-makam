<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Makam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_lhr' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_wafat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'latitude' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'longitude' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('makam');
    }

    public function down()
    {
        $this->forge->dropTable('makam');
    }
}
