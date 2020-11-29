<?php namespace App\Controllers;

class Vendedor extends BaseController
{
	public function verProductos()
	{
		return view('head').view('sidebar_vendedor').view('vendedor_productos');
	}

	public function verVentas()
	{
		return view('head').view('sidebar_vendedor').view('vendedor_ventas');
	}

	public function agregarVenta()
	{
		return view('head').view('sidebar_vendedor').view('agregar_venta');
	}
}