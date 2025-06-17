<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuario extends BaseController
{
    public function create()
    {
        if (!session()->get('logado') || session()->get('tipo') !== 'admin') {
            return redirect()->to('/painel');
        }
        return view('front-caminhao/usuario/create');
    }

    public function store()
    {
        $model = new UsuarioModel();

        $data = [
            'cpf'   => $this->request->getPost('cpf'),
            'nome'  => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
            'tipo'  => $this->request->getPost('tipo')
        ];

        $model->save($data);
        session()->setFlashdata('msg', 'Usuário cadastrado com sucesso!');
        return redirect()->to('/painel');
    }
}
