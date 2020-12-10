<?php namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model
{
	protected $table      = 'cliente';
    protected $primaryKey = 'idCliente';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idCliente','nombre','apellidos','correo','contrasenia','calle','codigoPostal','estado','ciudad','colonia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}