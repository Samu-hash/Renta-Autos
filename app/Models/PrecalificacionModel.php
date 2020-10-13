<?php

namespace App\Models;

use CodeIgniter\Model;

class PrecalificacionModel extends Model {

    protected $table = 'precalificacion';
    protected $primaryKey = 'id_precalificacion';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_precalificacion', 'id_usuario', 'id_matricula', 'fecha_salida', 
        'fecha_entrega', 'calificacion_cliente', 'estado_precalificacion'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
