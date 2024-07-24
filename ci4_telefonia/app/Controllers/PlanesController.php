<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\PlanesModel; 

class PlanesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $plan=new PlanesModel();
        $datos ['datos']=$plan-> findAll();
        
        //findAll()= select * from regiones
        return view('planes', $datos);
    }
    public function nuevoPlan():string 
    {
        return view('planes_nuevos');
    }
    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
        $nombre=$this->request->getVar('txtNombre');
        $pago = $this->request->getVar('txtPagoMensual');
        $minutos = $this->request->getVar('txtCantidadMinutos');
        $mensajes = $this->request->getvar('txtCantidadMensajes');
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('ver_planes');
    }
  
    public function eliminarPlan($id = null)
    {
        $plan = new PlanesModel();
        $plan->delete($id);
        return redirect()->route('ver_planes');
    
    }

    public function buscarPlan($id = null)
    {
        $plan = new PlanesModel();
        $datos['datos'] = $plan->where('plan_id', $id)->first();
        return view('form_modificar_plan', $datos);
    }

    public function modificarPlan()
    {
        $datos = [
        'plan_id' => $this->request->getVar('txtPlanId'),
        'nombre'=>$this->request->getVar('txtNombre'),
        'pago_mensual'=> $this->request->getVar('txtPagoMensual'),
        'cantidad_minutos'=> $this->request->getVar('txtCantidadMinutos'),
        'cantidad_mensajes'=> $this->request->getvar('txtCantidadMensajes')

        ];
        $plan = new PlanesModel();
        $plan->update($datos['plan_id'], $datos);
        return redirect('ver_planes');
    }

}
