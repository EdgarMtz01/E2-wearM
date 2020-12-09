<?php namespace App\Models;

use CodeIgniter\Model;

class wearmModel extends Model
{
    protected $table      = 'producto'; 
    protected $primaryKey = 'idProducto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idProducto', 'idCategoria','nombre','descripcion','talla_ropa','talla_zapato','costo','precio','stock','disponibilidad'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}