<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\MunicipiosModel;

class MunicipiosController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo MunicipiosModel
        $municipio = new MunicipiosModel();
        $datos['datos'] = $municipio->findAll();

        //findAll()= select * from municipioes
        return view('municipios', $datos);
    }

    public function nuevoMunicipio(): string
    {
        return view('municipio_nuevo');
    }

    public function agregarMunicipio()
    {
        $datos = [
            'cod_muni' => $this->request->getVar('txtId'),
            'nombre_municipio' => $this->request->getVar('txtNombre'),
            'cod_depto' => $this->request->getVar('txtCodDepto')
        ];

        $municipio = new MunicipiosModel();
        $municipio->insert($datos);
        echo "Datos Guardados Correctamente";
        return redirect()->route('ver_municipios');

    }
    public function eliminarMunicipio($id = null)
    {
        $municipio = new MunicipiosModel();
        $municipio->delete($id);
        return redirect()->route('ver_municipios');
    }

    public function buscarMunicipio($id = null)
    {
        $municipio = new MunicipiosModel();
        $datos['datos'] = $municipio->where('cod_muni', $id)->first();
        return view('form_modificar_municipio', $datos);
    }

    public function modificarMunicipio()
    {
        $datos = [
            'cod_muni' => $this->request->getVar('txtCodMunicipio'),
            'nombre_municipio' => $this->request->getVar('txtNombre'),
            'cod_depto' => $this->request->getVar('txtCodDepartamento')
        ];
        $municipio = new MunicipiosModel();
        $municipio->update($datos['cod_muni'], $datos);
        return redirect('ver_municipios');
    }
}


