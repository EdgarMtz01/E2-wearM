<?php namespace App\Controllers;
use App\Models\wearmModel; //usar el modelo wearmModel

class Vendedor extends BaseController
{
	public function verProductos()
	{
		$data['title'] = "Contact List";
		$model = new wearmModel();
		$data['posts'] = $model->findAll();
		
		return view('vendedor_productos',$data);
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