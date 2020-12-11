<?php namespace App\Controllers;

use App\Models\productosModel;

class Usuario extends BaseController
{

	public function index()
	{
		$variable='Usuario';
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section',array('controlador' => $variable)).view('footer');
	}

	public function busquedaProductos()
	{
		$variable='Usuario';
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_busqueda').view('footer');
	}

	public function detalleProducto()
	{
		$control='Usuario';
		$nombre = $_GET['nombre'];
		$variable= new productosModel($db);
		$variableIndice['products'] = $variable-> where('nombre',$nombre)->findAll(); 
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $control)).view('section_producto',$variableIndice,array('controlador' => $control)).view('footer');
	}

	public function carritoCompras()
	{
		$variable='Usuario';
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_carrito').view('footer');
	}

	public function metodoPago()
	{
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_pago').view('footer');
	}

	public function envio()
	{
		return view('infoEnvio');
	}

	public function productosHombre()
	{
		$variable='Usuario';
		return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_prodHombre',array('controlador' => $variable)).view('footer');
	}

	public function productosMujer()
	{
		$variable='Usuario';
        return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_prodMujer',array('controlador' => $variable)).view('footer');
	}

	public function productosNiño()
	{
		$variable='Usuario';
        return view('head').view('headerRegistrado').view('nav',array('controlador' => $variable)).view('section_prodNinio',array('controlador' => $variable)).view('footer');
	}
}