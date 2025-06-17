<?php
namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        return view('front-caminhao/auth/login');
    }

    public function loginPost()
    {
        $cpf   = $this->request->getPost('cpf');
        $senha = $this->request->getPost('senha');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('cpf', $cpf)->first();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            session()->set([
                'usuario_id'    => $usuario['id'],
                'usuario_nome'  => $usuario['nome'],
                'usuario_cpf'   => $usuario['cpf'],
                'usuario_email' => $usuario['email'],
                'logado'        => true,
                'tipo'          => $usuario['tipo']
            ]);
            return redirect()->to('/painel');
        }

        return redirect()->back()->with('erro', 'CPF ou senha incorretos.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function register()
    {
        return view('front-caminhao/auth/register');
    }

    public function registerPost()
    {
        $usuarioModel = new UsuarioModel();

        $usuarioModel->save([
            'cpf'   => $this->request->getPost('cpf'),
            'nome'  => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
            'tipo'  => $this->request->getPost('tipo') ?? 'user',
        ]);

        session()->setFlashdata('msg', 'Usuário cadastrado com sucesso! Faça o login.');
        return redirect()->to('/login');
    }
}
