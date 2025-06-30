<?php

use PHPUnit\Framework\TestCase;
use App\Models\CaminhaoModel;

class CaminhaoFuncionalidadeTest extends TestCase
{
    protected $caminhaoModel;

    protected function setUp(): void
{
    parent::setUp();

    // Banco em memória
    $this->db = \Config\Database::connect([
        'DBDriver' => 'SQLite3',
        'database' => ':memory:',
    ]);

    // Drop para evitar erro se a tabela já existir
    $this->db->query("DROP TABLE IF EXISTS caminhoes");

    // Criação da tabela para os testes
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

    $this->caminhaoModel = new CaminhaoModel($this->db);
}

    public function testInserirCaminhaoComSucesso()
    {
        $dados = [
            'nome_veiculo'    => 'Funcional Scania',
            'placa'           => 'XYZ5678',
            'cor'             => 'AZUL',
            'crlv_vencimento' => '2026-05-10',
            'antt'            => '87654321',
            'km_rodados'      => 20000,
            'seguro'          => '2025-07-15',
            'motorista'       => 'Motorista Funcional'
        ];

        $id = $this->caminhaoModel->insert($dados);
        $this->assertIsNumeric($id, "Caminhão não foi inserido com sucesso.");

        $caminhao = $this->caminhaoModel->find($id);
        $this->assertEquals('XYZ5678', $caminhao['placa']);

        // Limpeza: remover o registro
        $this->caminhaoModel->delete($id);
    }

    public function testNaoPermitePlacaDuplicada()
    {
        $dados = [
            'nome_veiculo'    => 'Primeiro Caminhão',
            'placa'           => 'DUPLIC123',
            'cor'             => 'PRETO',
            'crlv_vencimento' => '2025-01-01',
            'antt'            => '11223344',
            'km_rodados'      => 15000,
            'seguro'          => '2024-12-31',
            'motorista'       => 'Teste Dup'
        ];

        // Insere o primeiro caminhão
        $id1 = $this->caminhaoModel->insert($dados);
        $this->assertIsNumeric($id1, "Primeiro caminhão não foi inserido.");

        // Tentar inserir o segundo com a mesma placa
        try {
            $this->caminhaoModel->insert($dados);
            $this->fail("Esperava falha ao inserir placa duplicada, mas não ocorreu.");
        } catch (\Exception $e) {
            $this->assertStringContainsString('UNIQUE', $e->getMessage());
        }

        // Limpeza: remover registro
        $this->caminhaoModel->delete($id1);
    }
}
