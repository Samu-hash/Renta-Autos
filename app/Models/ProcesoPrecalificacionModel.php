<?php

namespace App\Models;

use CodeIgniter\Model;

class ProcesoPrecalificacionModel extends Model {

    protected $table = 'proceso_precalificacion';
    protected $primaryKey = 'id_proceso, id_precalificacion, id_tipo_requisito';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_proceso', 'id_precalificacion', 'id_tipo_requisito', 'observaciones',
        'url_imagen', 'estado_proceso'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
