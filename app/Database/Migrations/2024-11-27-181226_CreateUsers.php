<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cin' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'unique'     => true, // This ensures CIN is unique
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'num_tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'date_naissance' => [
                'type' => 'DATE',
            ],
            'date_recrutement' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('employes');
    }

    public function down()
    {
        $this->forge->dropTable('employes', true); // Ensures proper rollback
    }
}
