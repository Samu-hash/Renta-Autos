<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenciaModel extends Model {

    protected $table = 'agencia';
    protected $primaryKey = 'id_agencia';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_agencia', 'id_muni', 'nombre_agencia', 'direccion_agencia', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
