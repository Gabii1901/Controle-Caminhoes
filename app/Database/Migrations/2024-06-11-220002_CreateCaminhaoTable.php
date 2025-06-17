<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCaminhaoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'auto_increment' => true],
            'nome_veiculo'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'placa'            => ['type' => 'VARCHAR', 'constraint' => 10],
            'cor'              => ['type' => 'VARCHAR', 'constraint' => 30],
            'crlv_vencimento'  => ['type' => 'DATE'],
            'antt'             => ['type' => 'VARCHAR', 'constraint' => 8],
            'km_rodados'       => ['type' => 'INT'],
            'seguro'           => ['type' => 'DATE'],
            'motorista'        => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('caminhoes');
    }

    public function down()
    {
        $this->forge->dropTable('caminhoes');
    }
}
