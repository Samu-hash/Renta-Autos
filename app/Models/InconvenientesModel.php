<?php

namespace App\Models;

use CodeIgniter\Model;

class InconvenientesModel extends Model {

    protected $table = 'inconvenientes';
    protected $primaryKey = 'id_reserva, id_matricula, id_tipo_inconveniente';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_reserva', 'id_matricula', 'id_tipo_inconveniente', 'observaciones', 'recargo'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
