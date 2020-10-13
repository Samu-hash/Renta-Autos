<?php

namespace App\Models;

use CodeIgniter\Model;

class AutosReservasModel extends Model {

    protected $table = 'autos_reservas';
    protected $primaryKey = 'id_reserva, id_matricula, id_accesorio';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_reserva', 'id_matricula', 'id_accesorio', 'observacion', 
        'activar_aseguramiento', 'cantidad_aseguramiento'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
