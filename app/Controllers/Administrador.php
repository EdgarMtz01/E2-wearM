<?php namespace App\Controllers;

use App\Models\productosModel;

class Administrador extends BaseController
{
	public function verProductos()
	{
		/*$db      = \Config\Database::connect();
		$builder = $db->table('productos');
		$builder->select('*');
		$builder->join('categoria','categoria.idCategoria = productos.idCategoria');
		$variableQuery = $builder->get();
		$variableIndice['products'] = $variableQuery->getResultArray();*/

		$variable= new productosModel($db);
		$variableIndice['products'] = $variable->findAll();
		return view('head').view('sidebar').view('admi_productos',$variableIndice);
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

	public function confirmarProducto(){
		
		$request = \Config\Services::request();
		$idProducto = $request->getPost('codigo_producto');
		$categoria = $request->getPost('categoria_producto');
		$imagen = $request->getPost('imagen_producto');
		$nombre = $request->getPost('nombre_producto');
		$descripcion = $request->getPost('descripcion_producto');
		$talla = $request->getPost('talla_producto');
		$costo = $request->getPost('costo_producto');
		$precio = $request->getPost('precio_producto');
		$stock = $request->getPost('stock_producto');
		
		if ($categoria=="Ninguna") {
			$categoria = null;
		}

		$data = [
    	'idProducto' => $idProducto,
    	'categoria' => $categoria,
    	'imagen' => $imagen,
    	'nombre' => $nombre,
    	'descripcion' => $descripcion,
    	'talla' => $talla,
    	'costo' => $costo,
    	'precio' => $precio,
    	'stock' => $stock
		];
		$variable= new productosModel($db);
		$variable->insert($data);
		return redirect()->to(base_url()."/index.php/Administrador/agregarProducto");
		//echo "<script>alert('Producto agregado correctamente.');</script>";
	}

	public function editarProducto()
	{
		$id = $_GET['idPro'];
		$variable= new productosModel($db);
		$variableIndice['products'] = $variable->find([$id]); //buscar por id
		return view('head').view('sidebar').view('editar_producto',$variableIndice);
	}

	public function eliminarProducto()
	{
		$id = $_GET['idPro'];
		$variable= new productosModel($db);
		$variable->where('idProducto',$id)->delete();
		//echo "<script>alert('Producto eliminado correctamente.');</script>";
		return redirect()->to(base_url()."/index.php/Administrador/verProductos");
	}

	public function confirmarEdicion(){
		$request = \Config\Services::request();
		$idProducto = $request->getPost('codigo_producto');
		$categoria = $request->getPost('categoria_producto');
		$imagen = $request->getPost('imagen_producto');
		$nombre = $request->getPost('nombre_producto');
		$descripcion = $request->getPost('descripcion_producto');
		$talla = $request->getPost('talla_producto');
		$costo = $request->getPost('costo_producto');
		$precio = $request->getPost('precio_producto');
		$stock = $request->getPost('stock_producto');
		$id = $_GET['idPro'];
		
		if ($categoria=="Ninguna") {
			$categoria = null;
		}

		$data = [
    	'idProducto' => $idProducto,
    	'categoria' => $categoria,
    	'imagen' => $imagen,
    	'nombre' => $nombre,
    	'descripcion' => $descripcion,
    	'talla' => $talla,
    	'costo' => $costo,
    	'precio' => $precio,
    	'stock' => $stock
		];

		$variable= new productosModel($db);
		$variable->update($id,$data);
		//echo "<script>alert('Producto actualizado correctamente.');</script>";
		return redirect()->to(base_url()."/index.php/Administrador/verProductos");
	}
}