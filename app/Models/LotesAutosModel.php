<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model {

    protected $table = 'lotes_autos';
    protected $primaryKey = 'id_matricula';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_matricula', 'id_estacionamiento', 'id_modelo', 'tipo_transmision', 
        'color_auto', 'cant_asientos', 'cant_gasolina', 'url_imagen', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
