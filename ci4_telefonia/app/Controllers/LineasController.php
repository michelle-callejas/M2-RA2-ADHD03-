<?php

namespace App\Controllers;

//utilizar el modelo
use App\Models\LineasModel;

class LineasController extends BaseController
{
    public function index(): string
    {
        $linea = new LineasModel();
        $datos['datos'] = $linea->findAll();

        return view('lineas', $datos);
    }

    public function nuevolinea(): string
    {
        return view('linea_nueva');
    }

    public function agregarlinea()
    {
        $datos = [
            'no_telefono' => $this->request->getVar('txtNumero'),
            'meses_atraso' => $this->request->getVar('txtFechaPago'),
            'fecha_pago' => $this->request->getVar('txtMesesAtraso'),
            'plan_id' => $this->request->getVar('txtPlanId'),
            'cliente_id' => $this->request->getVar('txtClienteId')
        ];

        $linea = new LineasModel();
        $linea->insert($datos);
        echo "Datos Guardados Correctamente";
        return redirect()->route('ver_lineas');

    }
    public function eliminarLinea($id = null)
    {
        $linea = new LineasModel();
        $linea->delete($id);
        return redirect()->route('ver_lineas');
    }

    public function buscarLinea($id = null)
    {
        $linea = new LineasModel();
        $datos['datos'] = $linea->where('no_telefono', $id)->first();
        return view('form_modificar_linea', $datos);
    }

    public function modificarLinea()
    {
        $datos = [
            'no_telefono' => $this->request->getVar('txtNumero'),
            'meses_atraso' => $this->request->getVar('txtFechaPago'),
            'fecha_pago' => $this->request->getVar('txtMesesAtraso'),
            'plan_id' => $this->request->getVar('txtPlanId'),
            'cliente_id' => $this->request->getVar('txtClienteId')
        ];
        $linea = new LineasModel();
        $linea->update($datos['no_telefono'], $datos);
        return redirect('ver_lineas');
    }
}


