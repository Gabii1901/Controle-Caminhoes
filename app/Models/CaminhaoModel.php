<?php
namespace App\Models;

use CodeIgniter\Model;

class CaminhaoModel extends Model
{
    protected $table = 'caminhoes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome_veiculo',
        'placa',
        'cor',
        'crlv_vencimento',
        'antt',
        'km_rodados',
        'seguro',
        'motorista',
    ];

    protected $useTimestamps = true;
}
