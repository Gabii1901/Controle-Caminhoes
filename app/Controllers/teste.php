<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Teste extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();

        $usuarioModel->insert([
            'cpf'   => '12345678900',
            'nome'  => 'Gabriela Demossi',
            'email' => 'gabi@teste.com',
            'senha' => password_hash('123456', PASSWORD_DEFAULT),
            'tipo'  => 'admin',
        ]);

        return 'Usuário inserido com sucesso!';
    }
}
