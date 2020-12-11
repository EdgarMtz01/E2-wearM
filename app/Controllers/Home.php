<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('vw1');
	}

	//--------------------------------------------------------------------

	public function vistas(){
		return view('vw2');
	}
}
