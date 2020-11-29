<?php namespace App\Controllers;

class Administrador extends BaseController
{
	public function verProductos()
	{
		return view('head').view('sidebar').view('admi_productos');
	}

	public function agregarProducto()
	{
		return view('head').view('sidebar').view('agregar_producto');
	}

	public function verCompras()
	{
		return view('head').view('sidebar').view('admi_compras');
	}

	public function agregarCompra()
	{
		return view('head').view('sidebar').view('agregar_compra');
	}

	public function verVentas()
	{
		return view('head').view('sidebar').view('admi_ventas');
	}

	public function agregarVenta()
	{
		return view('head').view('sidebar').view('agregar_venta');
	}
}