<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cpf', 'nome', 'email', 'senha', 'tipo'];
    protected $useTimestamps = true;
}
