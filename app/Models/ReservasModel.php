<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasModel extends Model {

    protected $table = 'reservas';
    protected $primaryKey = 'id_reserva';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_reserva', 'id_agencia', 'id_usuario', 'id_cupon',
        'precio_reserva', 'cantidad_final', 'fecha_inc_reserva', 'fecha_fin_reserva',
        'reserva_cancelada', 'motivo_cancelacion', 'estado_reserva'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
