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
		return view('head').view('headerRegistrado').view('nav').view('section_producto').view('footer');
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