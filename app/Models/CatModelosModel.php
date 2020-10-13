<?php

namespace App\Models;

use CodeIgniter\Model;

class CatModelosModel extends Model {

    protected $table = 'cat_modelo';
    protected $primaryKey = 'id_modelo';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_modelo', 'id_marca', 'nombre_modelo', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
