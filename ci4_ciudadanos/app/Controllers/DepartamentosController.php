<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\DepartamentosModel; 

class DepartamentosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $departamento=new DepartamentosModel();
        $datos ['datos']=$departamento-> findAll();
        
        //findAll()= select * from regiones
        return view('departamentos', $datos);
    }

    public function nuevoDepartamento():string
    {
        return view ('departamento_nuevo');
    }

    public function agregarDepartamento(){
        $datos=[
            'cod_depto'=>$this->request->getVar('txtId'),
            'nombre_depto'=>$this->request->getVar('txtNombre'),
            'cod_region'=>$this->request->getVar('txtCodRegion')
        ];

        $departamento=new DepartamentosModel();
        $departamento-> insert($datos);
        echo "Datos Guardados";
        return redirect() -> route('ver_departamentos');

    }

    public function eliminarDepartamento($id = null)
    {
        $departamento = new DepartamentosModel();
        $departamento->delete($id);
        return redirect()->route('ver_departamentos');
    }

    public function buscarDepartamento($id = null)
    {
        $departamento = new DepartamentosModel();
        $datos['datos'] = $departamento->where('cod_depto', $id)->first();
        return view('form_modificar_departamento', $datos);
    }

    public function modificarDepartamento()
    {
        $datos = [
            'cod_depto'=>$this->request->getVar('txtCodDepto'),
            'nombre_depto'=>$this->request->getVar('txtNombre'),
            'cod_region'=>$this->request->getVar('txtCodRegion')
        ];
        $departamento = new DepartamentosModel();
        $departamento->update($datos['cod_depto'], $datos);
        return redirect('ver_departamentos');
    }
}
