<?php namespace App\Controllers;

class Controlador extends BaseController
{
	public function index()
	{
		return view('header').view('nav').view('section').view('footer');
	}

	public function busquedaProductos()
	{
		return view('header').view('nav').view('section_busqueda').view('footer');
	}

}