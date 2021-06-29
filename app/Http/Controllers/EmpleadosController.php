<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadosController extends Controller
{
    public function V_Empleados(){
    
        $data = Empleado::all();
        foreach($data AS $index => $e){
            
            $empleados[$index] = $e;
            $empleados[$index]['SalarioMes'] = ($e['salarioDia']*30);
            $empleados[$index]['SalarioSemana'] = ($e['salarioDia']*7);
            $empleados[$index]['SalarioQuincena'] = ($e['salarioDia']*15);

        }

        return view('AdminEmpleados', [ 'empleados'=>$empleados ]);
    }
}
