<?php

namespace App\Models;

use CodeIgniter\Model;

class EstacionamientosModel extends Model {

    protected $table = 'estacionamiento';
    protected $primaryKey = 'id_estacionamiento';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_estacionamiento', 'cant_autos', 'cant_min', 'cant_max', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
