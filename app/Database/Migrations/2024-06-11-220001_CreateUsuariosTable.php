<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'nome'       => ['type' => 'VARCHAR', 'constraint' => 100], // Nome do usuário
            'cpf'        => ['type' => 'VARCHAR', 'constraint' => 14, 'unique' => true],
            'email'      => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true],
            'senha'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'tipo'       => ['type' => 'ENUM', 'constraint' => ['admin', 'user'], 'default' => 'user'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
