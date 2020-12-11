<?php namespace App\Controllers;

use App\Models\productosModel;
use App\Models\clienteModel;

class Controlador extends BaseController
{
	public function index()
	{
		$variable='Controlador';
		return view('head').view('header').view('nav',array('controlador' => $variable)).view('section',array('controlador' => $variable)).view('footer');
	}

	public function busquedaProductos()
	{
		$variable='Controlador';
		return view('head').view('header').view('nav',array('controlador' => $variable)).view('section_busqueda').view('footer');
	}

	public function detalleProducto()
	{
		$control='Controlador';
		$nombre = $_GET['nombre'];
		$variable= new productosModel($db);
		$variableIndice['products'] = $variable-> where('nombre',$nombre)->findAll(); 
		return view('head').view('header').view('nav',array('controlador' => $control)).view('section_producto',$variableIndice,array('controlador' => $control)).view('footer');
	}

	public function inicioSesion()
	{
		return view('head').view('iniciarSesion');
	}

	public function inicioSesionPassword()
	{

		return view('head').view('iniciarSesionContra');
	}

	public function registroUsuario()
	{
		return view('head').view('registro');
	}

	public function productosHombre()
	{
		$variable='Controlador';
		return view('head').view('header').view('nav',array('controlador' => $variable)).view('section_prodHombre',array('controlador' => $variable)).view('footer');
	}

	public function productosMujer()
	{
		$variable='Controlador';
        return view('head').view('header').view('nav',array('controlador' => $variable)).view('section_prodMujer',array('controlador' => $variable)).view('footer');
	}

	public function productosNiño()
	{
		$variable='Controlador';
        return view('head').view('header').view('nav',array('controlador' => $variable)).view('section_prodNinio',array('controlador' => $variable)).view('footer');
	}

}