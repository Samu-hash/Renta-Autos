<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoRoleModel extends Model {

    protected $table = 'tipo_role';
    protected $primaryKey = 'id_tipo_role';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tipo_role', 'nombre_role', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
