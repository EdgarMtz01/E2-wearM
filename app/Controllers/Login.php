<?php namespace App\Controllers;
 
use App\Models\loginModel;
 
class Login extends BaseController 
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('loginModel');
    }

    public function index()
    {
        if($this->session->userdata('Login')){
            redirect(base_url().'Administrador');
        }else{
            $this->load->view('iniciarSesion');
        }
    }
  
    public function iniciarSesion()
    {
        $correo = $this->input->post('correo_inicio');
        $password = $this->input->post('pwd');
        $request = $this->loginModel->login($correo,$password);
        //var_dump($res);
        if (!$request) {
            $this->session->set_flashdata('error','El usuario y/o contraseña son incorrectos');
            redirect(base_url().'Controlador');
         } else{

            $data = array(
                //'id' => $request->idTrabajador,
                'correo'      => $request->correo,
               // 'idRol'        => $request->idRol,
                'login'        => TRUE,
            );
            echo $this->session->set_userdata($data);
            redirect(base_url().'agregar_producto');
         }
    }

    public function cerrarSesion()
    {
        $this->session->sess_destroy();
        redirect(base_url().'section');
    }
}