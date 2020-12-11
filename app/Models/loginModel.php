<?php namespace App\Models;

use CodeIgniter\Model;

	class loginModel extends Model
	{
		public function login($user,$pass)
		{
		  $this->db->where('correo',$correo);
		  $this->db->where('contrasenia',$password);
		 // $resultado = $this->db->get('empleado');
		  if($resultado->num_rows()>0){
		  	$resultado = $this->db->get('empleado');
		  	return $resultado->row();
		  }else{
		  	$resultado = $this->db->get('cliente');
		  }
		}
	}
 ?>