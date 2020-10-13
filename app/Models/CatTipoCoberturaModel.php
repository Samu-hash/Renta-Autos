<?php

namespace App\Models;

use CodeIgniter\Model;

class CatTipoCoberturaModel extends Model {

    protected $table = 'cat_tipo_cobertura';
    protected $primaryKey = 'id_tipo_cobertura, id_aseguradora, id_matricula';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tipo_cobertura', 'id_aseguradora', 'id_matricula', 'nombre_cobertura', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
