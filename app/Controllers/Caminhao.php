<?php
namespace App\Controllers;

use App\Models\CaminhaoModel;
use CodeIgniter\Controller;

class Caminhao extends BaseController
{
    protected $caminhaoModel;

    public function __construct()
    {
        $this->caminhaoModel = new CaminhaoModel();
    }

    public function index()
    {
        if (!session()->get('logado')) return redirect()->to('/login');

        $query = $this->caminhaoModel;

        if ($this->request->getGet('placa')) {
            $query = $query->like('placa', $this->request->getGet('placa'));
        }
        if ($this->request->getGet('cor')) {
            $query = $query->like('cor', $this->request->getGet('cor'));
        }
        if ($this->request->getGet('vencimento')) {
            $query = $query->where('crlv_vencimento <=', $this->request->getGet('vencimento'));
        }

        $data['caminhoes'] = $query->findAll();
        return view('front-caminhao/index', $data);
    }

    public function create()
    {
        if (!session()->get('logado')) return redirect()->to('/login');
        return view('front-caminhao/create');
    }

    public function store()
    {
        $this->caminhaoModel->save([
            'nome_veiculo'    => $this->request->getPost('nome_veiculo'),
            'placa'           => $this->request->getPost('placa'),
            'cor'             => $this->request->getPost('cor'),
            'crlv_vencimento' => $this->request->getPost('crlv_vencimento'),
            'antt'            => $this->request->getPost('antt'),
            'km_rodados'      => $this->request->getPost('km_rodados'),
            'seguro'          => $this->request->getPost('seguro'),
            'motorista'       => $this->request->getPost('motorista')
        ]);
        session()->setFlashdata('msg', 'Caminhão cadastrado com sucesso!');
        return redirect()->to('/caminhao');
    }

    public function edit($id)
    {
        if (!session()->get('logado')) return redirect()->to('/login');
        $data['caminhao'] = $this->caminhaoModel->find($id);
        return view('front-caminhao/edit', $data);
    }

    public function update($id)
    {
        $this->caminhaoModel->update($id, [
            'nome_veiculo'    => $this->request->getPost('nome_veiculo'),
            'placa'           => $this->request->getPost('placa'),
            'cor'             => $this->request->getPost('cor'),
            'crlv_vencimento' => $this->request->getPost('crlv_vencimento'),
            'antt'            => $this->request->getPost('antt'),
            'km_rodados'      => $this->request->getPost('km_rodados'),
            'seguro'          => $this->request->getPost('seguro'),
            'motorista'       => $this->request->getPost('motorista')
        ]);
        session()->setFlashdata('msg', 'Caminhão atualizado com sucesso!');
        return redirect()->to('/caminhao');
    }

    public function delete($id)
    {
        $this->caminhaoModel->delete($id);
        session()->setFlashdata('msg', 'Caminhão excluído com sucesso!');
        return redirect()->to('/caminhao');
    }
}
