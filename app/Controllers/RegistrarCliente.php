<?php namespace App\Controllers;
 
use App\Models\clienteModel;
 
class RegistrarCliente extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registrar', $data);
    }
 
    public function guardar()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nombre'   => 'required|min_length[3]|max_length[20]',
            'apellidos'   => 'required|min_length[3]|max_length[20]',
            'correo'      => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'contrasenia'      => 'required|min_length[6]|max_length[200]',
           'confcontrasenia'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'nombre'     => $nombre,
                'apellidos'  => $apellidos,
                'correo'    => $correo,
                'contraseña' => $contrasenia
            ];
            $model->save($data);
            return redirect()->to(base_url()."/index.php/Controlador/index");
        }else{
            $data['validation'] = $this->validator;
            echo view('registrar', $data);
        }
         
    }
 
}