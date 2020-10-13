<?php

namespace App\Models;

use CodeIgniter\Model;

class CatMunicipiosModel extends Model {

    protected $table = 'cat_municipios';
    protected $primaryKey = 'id_muni';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_muni', 'id_depto', 'nombre_muni'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
