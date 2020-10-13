<?php

namespace App\Models;

use CodeIgniter\Model;

class CatAccesoriosModel extends Model {

    protected $table = 'cat_accesorios';
    protected $primaryKey = 'id_accesorio';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_accesorio', 'titulo_accesorio', 'descripcion', 'precio', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
