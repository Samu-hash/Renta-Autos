<?php

namespace App\Models;

use CodeIgniter\Model;

class ReferenciaCliente extends Model {

    protected $table = 'referencia_cliente';
    protected $primaryKey = 'id_referencia';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_referencia', 'id_usuario', 'usuario_referencia', 'documento_identidad',
        'referencia', 'aprobacion'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
