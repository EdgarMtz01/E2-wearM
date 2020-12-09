<?php namespace App\Controllers;

class Controlador extends BaseController
{
	public function index()
	{
		return view('head').view('header').view('nav').view('section').view('footer');
	}

	public function busquedaProductos()
	{
		return view('head').view('header').view('nav').view('section_busqueda').view('footer');
	}

	public function detalleProducto()
	{
		return view('head').view('header').view('nav').view('section_producto').view('footer');
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
		return view('head').view('header').view('nav').view('section_prodHombre').view('footer');
	}

	public function productosMujer()
	{
        return view('head').view('header').view('nav').view('section_prodMujer').view('footer');
	}

	public function productosNiño()
	{
        return view('head').view('header').view('nav').view('section_prodNinio').view('footer');
	}

}