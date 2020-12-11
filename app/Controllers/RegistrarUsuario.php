<?php namespace App\Controllers;
use App\Models\clienteModel; 

class RegistrarUsuario extends BaseController
{
	public function resgistrarU()
	{
		$request = \Config\Services::request();

		$nombre = $request->getPost('nombre_cuenta');
		$apellidos = $request->getPost('apellido_cuenta');
		$correo = $request->getPost('correo_cuenta');
		$contrasenia = $request->getPost('password1_cuenta');
		$calle = 'null';
    	$codigoPostal = 'null';
    	$estado ='null';
    	$ciudad = 'null';
    	$colonia = 'null';




		$data  = [
    		'nombre' => $nombre,
    		'apellidos' => $apellidos,
    		'correo'    => $correo,
    		'contrasenia' => $contrasenia,
    		 'calle' => $calle,
    		'codigoPostal' => $codigoPostal,
    		'estado' => $estado,
    		'ciudad' => $ciudad,
    		'colonia' => $colonia 
		];
		var_dump($data);
		//$respuesta = new clienteModel($db); 
		//$respuesta->insert($data); 
		return view('head').view('registro');
		//return redirect()->to(base_url()."/index.php/Usuario/index");
	}

}