<?php

namespace App\Models;

use CodeIgniter\Model;

class CatDepartamentosModel extends Model {

    protected $table = 'cat_departamentos';
    protected $primaryKey = 'id_depto';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_depto', 'nombre_depto'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
