<?php

namespace App\Models;

use CodeIgniter\Model;

class CuponesModel extends Model {

    protected $table = 'cupones';
    protected $primaryKey = 'id_cupon';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_cupon', 'tipo_cupon', 'descripcion', 'f_aplica_desde', 'f_aplica_hasta', 
        'c_max_clientes', 'c_enviado_cliente', 'porcentaje_cupon', 'estado_cupon'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
