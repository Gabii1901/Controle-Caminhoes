<?php

use PHPUnit\Framework\TestCase;
use App\Models\CaminhaoModel;

class CaminhaoTest extends TestCase
{
    protected $caminhaoModel;

    protected function setUp(): void
    {
        parent::setUp();

        // Sobrescreve a conexão do model para usar SQLite em memória
        $this->db = \Config\Database::connect([
            'DBDriver' => 'SQLite3',
            'database' => ':memory:',
        ]);

        // Cria a tabela necessária para os testes
        $this->db->query("
            CREATE TABLE caminhoes (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome_veiculo TEXT,
                placa TEXT UNIQUE,
                cor TEXT,
                crlv_vencimento TEXT,
                antt TEXT,
                km_rodados INTEGER,
                seguro TEXT,
                motorista TEXT,
                created_at TEXT,
                updated_at TEXT
            );
        ");

        // Inicializa o model usando a conexão de teste
        $this->caminhaoModel = new CaminhaoModel($this->db);
    }

    public function testInserirBuscarExcluirCaminhao()
    {
        $dados = [
            'nome_veiculo'    => 'Teste Unidade',
            'placa'           => 'TEST1234',
            'cor'             => 'VERDE',
            'crlv_vencimento' => '2026-12-31',
            'antt'            => '12345678',
            'km_rodados'      => 10000,
            'seguro'          => '2025-12-31',
            'motorista'       => 'Motorista Teste'
        ];

        $id = $this->caminhaoModel->insert($dados);
        $this->assertIsNumeric($id, "Falha ao inserir caminhão: id não gerado.");

        $caminhao = $this->caminhaoModel->find($id);
        $this->assertNotNull($caminhao, "Caminhão inserido não foi encontrado.");
        $this->assertEquals('TEST1234', $caminhao['placa'], "Placa não corresponde.");

        $this->caminhaoModel->delete($id);
        $caminhaoRemovido = $this->caminhaoModel->find($id);
        $this->assertNull($caminhaoRemovido, "Caminhão não foi removido do banco.");
    }
}
?>
