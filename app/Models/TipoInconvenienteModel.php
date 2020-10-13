<?php

namespace App\Models;

use CodeIgniter\Model;

class TipoInconvenienteModel extends Model {

    protected $table = 'tipo_inconveniente';
    protected $primaryKey = 'id_tipo_inconveniente';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tipo_inconveniente', 'nombre_inconveniente', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
