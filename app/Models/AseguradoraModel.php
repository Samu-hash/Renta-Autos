<?php

namespace App\Models;

use CodeIgniter\Model;

class AseguradoraModel extends Model {

    protected $table = 'aseguradora';
    protected $primaryKey = 'id_aseguradora';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_aseguradora', 'nombre_aseguradora', 'tipo_aseguradora', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
