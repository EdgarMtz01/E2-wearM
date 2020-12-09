<?php namespace App\Models;

use CodeIgniter\Model;

class productosModel extends Model
{
	protected $table      = 'producto';
    protected $primaryKey = 'idProducto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idProducto','categoria','imagen','nombre','descripcion','talla','costo','precio','stock'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}