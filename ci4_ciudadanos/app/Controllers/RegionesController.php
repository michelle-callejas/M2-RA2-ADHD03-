<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $region = new RegionesModel();
        $datos['datos'] = $region->findAll();

        //findAll()= select * from regiones
        return view('regiones', $datos);
    }

    public function nuevaRegion(): string
    {
        return view('region_nueva');
    }

    public function agregarRegion()
    {
        $datos = [
            'cod_region' => $this->request->getVar('txtCodRegion'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];

        $region = new RegionesModel();
        $region->insert($datos);
        echo "Datos Guardados Correctamente";
        return redirect()->route('ver_regiones');

    }

    public function eliminarRegion($id = null)
    {
        $region = new RegionesModel();
        $region->delete($id);
        return redirect()->route('ver_regiones');
    }

    public function buscarRegion($id = null)
    {
        //echo "codigo: " .$id;
        $region = new RegionesModel();
        //select * from region where plan_id=$id;
        $datos['datos'] = $region->where('cod_region', $id)->first();
        //print_r($datos);
        return view('form_modificar_region', $datos);
    }

    public function modificarRegion()
    {
        $datos = [
            'cod_region' => $this->request->getVar('txtCodRegion'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];
        //print_r($datos);
        // para modificar se crea un objeto
        $region = new RegionesModel();
        //update region set 
        $region->update($datos['cod_region'], $datos);
        return redirect('ver_regiones');
    }
}
