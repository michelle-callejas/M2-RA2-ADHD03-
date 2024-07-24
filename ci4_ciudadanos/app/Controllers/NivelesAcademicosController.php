<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\NivelesAcademicosModel;

class NivelesAcademicosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo nivelsModel
        $nivel = new NivelesAcademicosModel();
        $datos['datos'] = $nivel->findAll();

        //findAll()= select * from regiones
        return view('nivelesacademicos', $datos);
    }
    public function nuevoNivel(): string
    {
        return view('nivel_nuevo');
    }

    public function agregarNivel() 
    {
        $datos = [
            'cod_region' => $this->request->getVar('txtCodNivelAcad'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripción' => $this->request->getVar('txtDescripcion')
        ];

        $nivel = new NivelesAcademicosModel();
        $nivel->insert($datos);
        echo "Datos Guardados Correctamente";
        return redirect()->route('ver_niveles');

    }

    public function eliminarNivel($id = null)
    {
        $nivel = new NivelesAcademicosModel();
        $nivel->delete($id);
        return redirect()->route('ver_niveles');
    }

    public function buscarNivel($id = null)
    {
        $nivel = new NivelesAcademicosModel();
        $datos['datos'] = $nivel->where('cod_nivel_acad', $id)->first();
        return view('form_modificar_nivel', $datos);
    }

    public function modificarNivel()
    {
        $datos = [
            'cod_nivel_acad' => $this->request->getVar('txtCodNivel'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];
        $nivel = new NivelesAcademicosModel();
        $nivel->update($datos['cod_nivel_acad'], $datos);
        return redirect('ver_niveles');
    }
}




