<?php namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model {

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_usuario', 'id_tipo_role', 'nombres', 'apellidos',
        'tipo_persona', 'documento_unico', 'trj_circulacion', 'fecha_expiracion', 
        'correo_electronico', 'clave', 'direccion', 'telefono', 'estado'];
    protected $useTimestamps = false;
    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
