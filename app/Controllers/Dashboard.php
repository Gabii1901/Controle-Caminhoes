<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logado')) return redirect()->to('/login');
        return view('front-caminhao/dashboard/index');
    }
}
