<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ClientesModel; 

class ClientesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo clienteesModel
        $cliente=new ClientesModel();
        $datos ['datos']=$cliente-> findAll();
        
        //findAll()= select * from clientees
        return view('clientes', $datos);
    }

    public function nuevoCliente():string
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente()
    {
        $datos=[
            'cliente_id'=>$this->request ->getVar('txtId'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'correo_electronico'=>$this->request ->getVar('txtCorreo'),
            'calle_avenida'=>$this->request ->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request ->getVar('txtNoCasa'),
            'zona'=>$this->request ->getVar('txtZona')

        ];


        //creando objeto de tipo clientesModel
        $cliente=new ClientesModel();
        $cliente-> insert ($datos); //inserta todos los valores, insert into..
        echo "Datos guardados";
        return redirect()->route('ver_clientes');
    }

    public function eliminarCliente($id = null)
    {
        $cliente = new ClientesModel();
        $cliente->delete($id);
        return redirect()->route('ver_clientes');
    
    }

    public function buscarCliente($id = null)
    {
        $cliente = new ClientesModel();
        $datos['datos'] = $cliente->where('cliente_id', $id)->first();
        return view('form_modificar_cliente', $datos);
    }

    public function modificarCliente()
    {
        $datos = [
            'cliente_id'=>$this->request ->getVar('txtId'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'correo_electronico'=>$this->request ->getVar('txtCorreo'),
            'calle_avenida'=>$this->request ->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request ->getVar('txtNoCasa'),
            'zona'=>$this->request ->getVar('txtZona')

        ];
        $cliente = new ClientesModel();
        $cliente->update($datos['cliente_id'], $datos);
        return redirect('ver_clientes');
    }

}
