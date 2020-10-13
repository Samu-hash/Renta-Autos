<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoRequisitosModel extends Model{
    protected $table = 'tipo_requisitos';
    protected $primaryKey = 'id_tipo_requisito';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tipo_requisito', 'tipo_requisito', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
