<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\CiudadanosModel;

class CiudadanosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $ciudadano = new CiudadanosModel();
        $datos['datos'] = $ciudadano->findAll();

        //findAll()= select * from regiones
        return view('ciudadanos', $datos);
    }

    public function nuevoCiudadano(): string
    {
        return view('ciudadano_nuevo');
    }


    public function agregarCiudadano()
    {
        $datos=[
            'dpi'=>$this->request ->getVar('txtId'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'tel_casa'=>$this->request ->getVar('txtTelCasa'),
            'tel_movil'=>$this->request ->getVar('txtTelMovil'),
            'email'=>$this->request ->getVar('txtEmail'),
            'fechanac'=>$this->request ->getVar('txtFechaNac'),
            'cod_nivel_acad'=>$this->request ->getVar('txtCodNivel'),
            'cod_muni'=>$this->request ->getVar('txtCodMuni'),
            'contra'=>$this->request ->getVar('txtContrasena')



        ];

        //creando objeto de tipo clientesModel
        $ciudadano=new CiudadanosModel();
        $ciudadano-> insert ($datos);
        echo "Datos guardados";
        return redirect () -> route ('ver_ciudadanos');
    }

    public function eliminarCiudadano($id=null)
    {
        $ciudadano = new CiudadanosModel();
        $ciudadano->delete($id);
        return redirect() -> route ('ver_ciudadanos');
    }

    public function buscarCiudadano($id=null)
    {
        $ciudadano = new CiudadanosModel();  
        $datos['datos']=$ciudadano-> where ('dpi', $id )->first() ;
        return view('form_modificar_ciudadano', $datos);
    }

    public function modificarCiudadano($id=null)
    {
        $datos=[
            'dpi'=>$this->request ->getVar('txtId'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'direccion'=>$this->request ->getVar('txtDireccion'),
            'tel_casa'=>$this->request ->getVar('txtTelCasa'),
            'tel_movil'=>$this->request ->getVar('txtTelMovil'),
            'email'=>$this->request ->getVar('txtEmail'),
            'fechanac'=>$this->request ->getVar('txtFechaNac'),
            'cod_nivel_acad'=>$this->request ->getVar('txtCodNivel'),
            'cod_muni'=>$this->request ->getVar('txtCodMuni'),
            'contra'=>$this->request ->getVar('txtContrasena')
        ];

        $ciudadano=new CiudadanosModel();
        $ciudadano->update($datos['dpi'],$datos);
        return redirect() -> route ('ver_ciudadanos');
    }



}
