<?php namespace App\Controllers;

class Usuario extends BaseController
{

	public function index()
	{
		return view('head').view('headerRegistrado').view('nav').view('section').view('footer');
	}

	public function busquedaProductos()
	{
		return view('head').view('headerRegistrado').view('nav').view('section_busqueda').view('footer');
	}

	public function detalleProducto()
	{
		$nombre = $_GET['nombre'];
		$variable= new productosModel($db);
		$variableIndice['products'] = $variable-> where('nombre',$nombre)->findAll(); 
		return view('head').view('headerRegistrado').view('nav').view('section_producto',$variableIndice).view('footer');
	}

	public function carritoCompras()
	{
		return view('head').view('headerRegistrado').view('nav').view('section_carrito').view('footer');
	}

	public function metodoPago()
	{
		return view('head').view('headerRegistrado').view('nav').view('section_pago').view('footer');
	}

	public function envio()
	{
		return view('infoEnvio');
	}
}