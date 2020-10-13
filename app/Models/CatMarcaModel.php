<?php

namespace App\Models;

use CodeIgniter\Model;

class CatMarcaModel extends Model {

    protected $table = 'cat_marca';
    protected $primaryKey = 'id_marca';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_marca', 'nombre_marca', 'url_imagen', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
